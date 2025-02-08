<?php

namespace App\Http\Controllers;

use App\Models\Hopital;
use App\Models\Praticien;
use App\Models\RendezVous;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        switch (auth()->user()->role) {
            case 'patient':
                $rendez_vous = auth()->user()->patient->rendez_vous()->orderBy('date', 'desc')->get();
                return Inertia::render('Patient/RendezVous/Index', compact('rendez_vous'));

            case 'secretaire':
                $services = auth()->user()->secretaire->services->map(function ($service) {
                    return [
                        'name' => $service->nom . ' (' . $service->rendez_vous->count() . ')',
                        'value' => $service->id,
                        'count' => $service->rendez_vous->count(),
                    ];
                })->sortByDesc('count')->values();



                $data_to_hide = ['patient_id', 'praticien_id', 'service_id', 'service', 'created_at', 'updated_at', 'nom_hopital', 'patient',];

                $service = $services[0]['value'];

                $rendez_vous = RendezVous::where('service_id', $request->service ?? $service)->paginate(1);

                foreach ($rendez_vous as $rv) {
                    $rv->makeHidden($data_to_hide);
                }

                $search = $request->praticien ?? null;

                $relatedPraticienIds = auth()->user()->secretaire->hopital->praticiens()->pluck('praticiens.id');

                $praticiens = Praticien::where('id', $relatedPraticienIds)
                    ->with('user')
                    ->get()
                    ->append(['name', 'email', 'profile_photo_url'])
                    ->filter(function ($praticien) use ($search) {
                        return str_contains(strtolower($praticien->user->name ?? ''), strtolower($search)) ||
                            str_contains(strtolower($praticien->specialite), strtolower($search));
                    })
                    ->makeHidden(['user', 'user_id', 'created_at', 'updated_at'])
                    ->values();



                return Inertia::render('Secretaire/RendezVous/Index', compact('services', 'praticiens', 'rendez_vous', 'service'));



            default:
                abort(403);
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hopitals = [];
        return Inertia::Render('Patient/RendezVous/Create', compact('hopitals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient = auth()->user()->patient;
        $validated = $request->validate([
            'service' => 'required|exists:services,id',
            'date' => 'required|date|after_or_equal:tomorrow',
        ], [
            'service.required' => 'Veuillez choisir un service.',
            'service.exists' => 'Le service sélectionné est invalide.',
            'date.required' => 'Veuillez choisir une date.',
            'date.date' => 'Veuillez entrer une date valide.',
            'date.after_or_equal' => 'Veuillez choisir une date postérieure à aujourd\'hui.',
        ]);

        // Check if a reservation exists for the same hospital and date
        $existingReservation = RendezVous::where('service_id', $request->service)->where('patient_id', auth()->user()->patient->id)
            ->whereDate('date', $request->input('date'))
            ->exists();
        if ($existingReservation) {
            throw ValidationException::withMessages([
                'date' => 'Vous avez déjà un demande pour ce jour dans ce service.',
            ]);
        }
        $validated['patient_id'] = $patient->id;
        $validated['service_id'] = $validated['service'];

        RendezVous::create($validated);

        session()->flash('flash.banner', 'Rendez vous en cours traitement.');

        return redirect()->route('rendez-vous.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        switch (auth()->user()->role) {
            case 'secretaire':
                $request->validate([
                    'id' => 'required',
                    'date' => 'required|date|after_or_equal:tomorrow',
                    'praticien' => 'required_if:statut,accepté'
                ], [
                    'praticien.required' => 'Veuillez choisir un praticien.',
                    'date.required' => 'Veuillez choisir une date.',
                    'date.date' => 'Veuillez entrer une date valide.',
                    'date.after_or_equal' => 'Veuillez choisir une date postérieure à aujourd\'hui.',
                ]);
                RendezVous::find($request->id)->update(['date' => $request->date, 'praticien_id' => $request->praticien['id'] ?? null, 'statut' => $request->statut]);
                session()->flash('flash.banner', 'Rendez vous traité avec succès.');
                return redirect()->back();

            default:
                # code...
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        RendezVous::find($id)->delete();
        session()->flash('flash.banner', 'Rendez-vous annulé avec avec succès.');
        return redirect()->route('rendez-vous.index');
    }
}
