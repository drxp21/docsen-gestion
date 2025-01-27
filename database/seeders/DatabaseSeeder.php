<?php

namespace Database\Seeders;

use App\Models\Hopital;
use App\Models\Medicament;
use App\Models\Praticien;
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

        Medicament::factory(10)->create();


        $hopital = User::factory()->create([
            'name' => 'Hôpital Amath DANSOKHO de Kédougou',
            'email' => 'hadk@docsen.online',
            'role' => 'admin',
            'latitude' => '12,5562',
            'longitude' => '-12,18351',
            'phone' => ' 78 163 78 39'
        ]);

        Hopital::create([
            'user_id' => $hopital->id
        ]);
    }
}
