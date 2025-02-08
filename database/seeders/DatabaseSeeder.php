<?php

namespace Database\Seeders;

use App\Models\Hopital;
use App\Models\HopitalPraticien;
use App\Models\Medicament;
use App\Models\Patient;
use App\Models\Praticien;
use App\Models\Secretaire;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Praticien::factory(20)->create();

        User::factory()->create([
            'name' => 'Dave Sanchez',
            'email' => 'dave@docsen.online',
            'role' => 'superadmin',
        ]);



        $s = User::factory()->create([
            'name' => 'Secretaire Diene',
            'email' => 'secretaire@docsen.online',
            'role' => 'secretaire',
        ]);

        $pa = User::factory()->create([
            'name' => 'Patient Diene',
            'email' => 'patient@docsen.online',
            'role' => 'patient',
        ]);


        Medicament::factory(10)->create();


        $hopital = User::factory()->create([
            'name' => 'Hôpital Amath DANSOKHO de Kédougou',
            'email' => 'hadk@docsen.online',
            'role' => 'admin',
            'latitude' => '12,5562',
            'longitude' => '-12,18351',
            'phone' => ' 78 163 78 39'
        ]);



        $h = Hopital::create([
            'user_id' => $hopital->id
        ]);

        $s = Secretaire::create([
            'user_id' => $s->id,
            'hopital_id' => $h->id
        ]);

        $p = User::factory()->create([
            'name' => 'Praticien Diene',
            'email' => 'praticien@docsen.online',
            'role' => 'praticien',
        ]);

        $praticien = Praticien::create([
            'user_id' => $p->id,
            'specialite' => 'Gynécologie',
            'description' => fake()->text(),
        ]);

        $h->praticiens()->attach($praticien->id);

        foreach (Service::all() as $service) {
            $service->secretaire_id = $s->id;
            $service->save();
        }
        Patient::create(['user_id' => $pa->id]);

        for ($i = 0; $i < 3; $i++) {
            $u = User::factory()->create([
                'name' => fake()->name,
                'email' => fake()->email,
                'role' => 'secretaire',
            ]);
            Secretaire::create([
                'hopital_id' => $h->id,
                'user_id' => $u->id
            ]);
        }
    }
}
