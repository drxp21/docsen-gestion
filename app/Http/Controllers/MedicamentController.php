<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_to_hide = ['created_at', 'updated_at'];

        $medicaments = Medicament::paginate(5);
        foreach ($medicaments as $medicament) {
            $medicament->makeHidden($data_to_hide);
        }
        return Inertia::render('SuperAdmin/Medicament/Index', compact('medicaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('SuperAdmin/Medicament/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string',
            'description' => 'nullable|string',
            'forme' => 'nullable|string',
            'dosage' => 'nullable|numeric',
            'unite_dosage' => 'nullable|string|max:50',
            'prix' => 'nullable|string',
        ]);

        Medicament::create($data);
        session()->flash('flash.banner', 'Médicament ajouté avec succès.');

        return redirect()->route('medicament.index');
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
        $medicament = Medicament::find($id);
        return Inertia::render('SuperAdmin/Medicament/Edit', compact('medicament'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicament $medicament)
    {
        $data = $request->validate([
            'nom' => 'required|string',
            'description' => 'nullable|string',
            'forme' => 'nullable|string',
            'dosage' => 'nullable|numeric',
            'unite_dosage' => 'nullable|string|max:50',
            'prix' => 'nullable|string',
        ]);

        $medicament->update($data);
        session()->flash('flash.banner', 'Médicament mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medicament::find($id)->delete();
        session()->flash('flash.banner', 'Médicament supprimé avec succès.');
        return redirect()->route('medicament.index');
    }
}
