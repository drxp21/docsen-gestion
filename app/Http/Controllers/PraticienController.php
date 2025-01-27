<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionPraticien;
use App\Models\HopitalPraticien;
use App\Models\Praticien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class PraticienController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data_to_hide = ['description', 'profile_photo_path', 'user_id', 'user', 'created_at', 'updated_at'];

        switch (auth()->user()->role) {
            case 'superadmin':
                $praticiens = Praticien::paginate(10);

                foreach ($praticiens as $praticien) {
                    $praticien->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
                }
                return Inertia::render('SuperAdmin/Praticien/Index', compact('praticiens'));

            case 'admin':

                $praticiens = auth()->user()->hopital->praticiens()->paginate(10);
                foreach ($praticiens as $praticien) {
                    $praticien->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
                }


                return Inertia::render('Admin/Praticien/Index', compact('praticiens'));


            default:

                break;
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_to_hide = ['description', 'profile_photo_path', 'user_id', 'user', 'created_at', 'updated_at'];


        switch (auth()->user()->role) {
            case 'superadmin':
                return Inertia::render('SuperAdmin/Praticien/Create');
            case 'admin':
                $relatedPraticienIds = auth()->user()->hopital->praticiens()->pluck('praticiens.id');
                $praticiens = Praticien::whereNotIn('id', $relatedPraticienIds)->get();
                $current_praticiens = auth()->user()->hopital->praticiens;
                foreach ($current_praticiens as $praticien) {
                    $praticien->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
                }
                foreach ($praticiens as $praticien) {
                    $praticien->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
                }
                return Inertia::render('Admin/Praticien/Create', compact(['praticiens', 'current_praticiens']));
            default:
                break;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        switch (auth()->user()->role) {
            case 'superadmin':
                $request->validate(
                    [
                        'name' => 'required',
                        'phone' => 'nullable|phone:SN',
                        'email' => 'unique:users,email|required|email',
                    ]
                );

                $password = Str::random(10);

                $user = User::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    "longitude" => $request->longitude,
                    "latitude" => $request->latitude,
                    "phone" => $request->phone,
                    "role" => "praticien",
                    "password" => Hash::make($password),
                ]);

                Praticien::create([
                    'user_id' => $user->id,
                    'specialite' => $request->specialite,
                    'description' => $request->description
                ]);

                Mail::to($user->email)->send(new InscriptionPraticien($user, $password));

                session()->flash('flash.banner', 'Praticien ajouté avec succès.');

                break;

            case 'admin':
                $request->validate([
                    'praticiens.*.id' => 'exists:praticiens,id',
                ]);

                $hopital = auth()->user()->hopital;
                $newPraticienIds = collect($request->praticiens)->pluck('id')->toArray();

                $currentPraticienIds = $hopital->praticiens()->pluck('praticien_id')->toArray();

                $praticienIdsToAdd = array_diff($newPraticienIds, $currentPraticienIds);
                $praticienIdsToRemove = array_diff($currentPraticienIds, $newPraticienIds);
                foreach ($praticienIdsToAdd as $praticienId) {
                    $hopital->praticiens()->attach($praticienId);
                }

                if (!empty($praticienIdsToRemove)) {
                    $hopital->praticiens()->detach($praticienIdsToRemove);
                }

                session()->flash('flash.banner', 'Praticiens mis à jour avec succès.');
                break;



            default:
                break;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $praticien = Praticien::find($id)->makeHidden(['user_id', 'created_at', 'updated_at'])->append(['name', 'email', 'profile_photo_url', 'latitude', 'longitude']);
        return Inertia::render('SuperAdmin/Praticien/Show', compact('praticien'));
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        switch (auth()->user()->role) {
            case 'superadmin':
                Praticien::find($id)->delete();
                session()->flash('flash.banner', 'Praticien supprimé avec succès.');
                return redirect()->route('praticiens.index');
            case 'admin':

                break;
            default:
                break;

        }

    }


    public function search(Request $request)
    {
        $search = $request->input('q');

        $relatedPraticienIds = auth()->user()->hopital->praticiens()->pluck('praticiens.id');

        $praticiens = Praticien::whereNotIn('id', $relatedPraticienIds)
            ->with('user')
            ->get()
            ->append(['name', 'email', 'profile_photo_url'])
            ->filter(function ($praticien) use ($search) {
                return str_contains(strtolower($praticien->user->name ?? ''), strtolower($search)) ||
                    str_contains(strtolower($praticien->specialite), strtolower($search));
            })
            ->makeHidden(['user', 'user_id', 'created_at', 'updated_at'])
            ->values();


        return Inertia::render('Admin/Praticien/Create', [
            'praticiens' => $praticiens,
            'search' => $search,
        ]);
    }

}
