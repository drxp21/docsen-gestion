<?php

namespace App\Http\Controllers;

use App\Models\Disponibilite;
use Illuminate\Http\Request;

class DisponibiliteController extends Controller
{
    public function change_interval(Request $request)
    {           $validated = $request->validate([
            'id' => 'required|exists:disponibilites,id',
            'intervale' => 'required|numeric|min:20|max:240',
            'heure_debut' => 'required|date_format:H:i|before:heure_fin',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut'
        ]);
        // Disponibilite::find($validated['id'])->update($validated);
        session()->flash('flash.banner', 'Horaires mis à jour avec succès.');
        return redirect()->route('praticien.disponibilite');
    }
}
