<?php

namespace App\Http\Controllers;

use App\Models\Secretaire;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_to_hide = ['created_at', 'updated_at', 'hopital_id', 'secretaire_id'];

        $services = auth()->user()->hopital->services()->paginate(10);
        foreach ($services as $service) {
            $service->makeHidden($data_to_hide)->append('secretaire');
        }
        return Inertia::render('Admin/Service/Index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secretaires = auth()->user()->hopital->secretaires;
        $data_to_hide = ['created_at', 'updated_at', 'hopital_id', 'secretaire_id'];
        foreach ($secretaires as $secretaire) {
            $secretaire->makeHidden($data_to_hide)->append('name');
        }
        return Inertia::render('Admin/Service/Create', compact('secretaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'secretaire_id' => 'nullable|exists:secretaires,id',
            'nom_secretaire' => 'nullable|string|max:255',
            'email_secretaire' => 'nullable|unique:users,email|email|max:255',
            'name' => 'required',
            'phone' => 'nullable|phone:SN',
        ]);

        $password = Str::random(10);

        $secretaire_id = null;
        if (!$request->secretaire_id && $request->email_secretaire && $request->nom_secretaire) {
            $user = User::create([
                "name" => $request->nom_secretaire,
                "email" => $request->email_secretaire,
                "phone" => $request->phone,
                "role" => "secretaire",
                "password" => Hash::make($password),
            ]);

            $s = Secretaire::create([
                'user_id' => $user->id,
            ]);
            $secretaire_id = $s->id;
        } else {
            $secretaire_id = $request->secretaire_id;
        }

        $ser = Service::create([
            'nom' => $request->name,
            'hopital_id' => auth()->user()->hopital->id,
            'secretaire_id' => $secretaire_id
        ]);

        session()->flash('flash.banner', 'Service créé avec succès.');

        return redirect()->route('service.edit', $ser->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return Inertia::render('Admin/Service/Show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $secretaires = auth()->user()->hopital->secretaires->map(function ($secretaire) {
            return [
                'name' => $secretaire->user->name,
                'value' => $secretaire->id,
            ];
        });
        return Inertia::render('Admin/Service/Edit', compact('service', 'secretaires'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Service::find($id)->update(["nom" => $request->nom, "secretaire_id" => $request->secretaire]);
        session()->flash('flash.banner', 'Service mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::find($id)->delete();
        session()->flash('flash.banner', 'Service supprimé avec succès.');
        return redirect()->route('service.index');

    }
}
