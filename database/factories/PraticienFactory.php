<?php

namespace Database\Factories;

use App\Models\Praticien;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Praticien>
 */
class PraticienFactory extends Factory
{
    protected $model = Praticien::class;

    public function definition(): array
    {
        $specialites = [
            'Cardiologie',
            'Dermatologie',
            'Pédiatrie',
            'Neurologie',
            'Ophtalmologie',
            'Orthopédie',
            'Psychiatrie',
            'Radiologie',
            'Gynécologie',
            'Anesthésiologie',
        ];

        $user = User::factory()->create([
            'name' => 'Dr. ' . fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'role' => 'praticien',
            'phone' => fake()->phoneNumber(),
        ]);

        return [
            'user_id' => $user->id,
            'specialite' => fake()->randomElement($specialites),
            'description' => fake()->text(),
        ];
    }
}
