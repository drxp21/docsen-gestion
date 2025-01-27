<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionHopital;
use App\Models\Hopital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class HopitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_to_hide = ['description', 'profile_photo_path', 'user_id', 'user', 'created_at', 'updated_at'];

        $hopitals = Hopital::paginate(10);

        foreach ($hopitals as $hopital) {
            $hopital->makeHidden($data_to_hide)->append(['name', 'email', 'profile_photo_url']);
        }
        return Inertia::render('SuperAdmin/Hopital/Index', compact('hopitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('SuperAdmin/Hopital/Create');
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
            ]
        );

        $password = Str::random(10);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "longitude" => $request->longitude,
            "latitude" => $request->latitude,
            "role" => "admin",
            "password" => Hash::make($password),
        ]);

        Hopital::create([
            'user_id' => $user->id,
        ]);

        Mail::to($user->email)->send(new InscriptionHopital($user, $password));

        session()->flash('flash.banner', 'Hôpital ajouté avec succès.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
