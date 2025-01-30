<?php

namespace App\Http\Controllers;

use App\Models\Secretaire;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Inertia\Inertia;

class SecretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_to_hide = ['hopital_id', 'profile_photo_path', 'user_id', 'user', 'created_at', 'updated_at'];

        $secretaires = Secretaire::paginate(10);

        foreach ($secretaires as $secretaire) {
            $secretaire->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
        }
        return Inertia::render('Admin/Secretaire/Index', compact('secretaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = auth()->user()->hopital->services->map(function ($service) {
            return [
                'nom' => $service->nom,
                'id' => $service->id,
            ];
        });
        return Inertia::render('Admin/Secretaire/Create', compact('services'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'phone' => 'nullable|phone:SN',
                'email' => 'unique:users,email|required|email',
                'services.*.id' => 'exists:services,id',
            ]
        );

        $password = Str::random(10);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "role" => "secretaire",
            "password" => Hash::make($password),
        ]);


        $sec = Secretaire::create([
            'user_id' => $user->id,
            'hopital_id' => auth()->user()->hopital->id,
        ]);

        foreach ($request->services as $s) {
            Service::where('id', $s['value'])->update(['secretaire_id' => $sec['id']]);
        }

        session()->flash('flash.banner', 'Secrétaire ajouté avec succès.');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $secretaire = Secretaire::find($id)->makeHidden(['user_id', 'hopital_id', 'created_at', 'updated_at'])->append(['name', 'email', 'profile_photo_url']);
        $services = Secretaire::find($id)->services->makeHidden(['hopital_id', 'secretaire_id', 'created_at', 'updated_at']);
        $hopital_services = auth()->user()->hopital->services->map(function ($service) {
            return [
                'nom' => $service->nom,
                'id' => $service->id,
            ];
        });
        return Inertia::render('Admin/Secretaire/Show', compact('secretaire', 'services', 'hopital_services'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Secretaire::find($id)->delete();
        session()->flash('flash.banner', 'Secrétaire supprimé avec succès.');
        return redirect()->route('secretaire.index');
    }

    public function assigner(Request $request)
    {
        foreach ($request->services_to_link as $s) {
            Service::where('id', $s['id'])->update(['secretaire_id' => $request->secretaire_id]);
        }
        return redirect()->route('secretaire.show', $request->secretaire_id);
    }
}
