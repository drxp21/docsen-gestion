<?php

namespace Database\Factories;

use App\Models\Medicament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicament>
 */
class MedicamentFactory extends Factory
{
    protected $model = Medicament::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement([
                'Paracétamol',
                'Ibuprofène',
                'Amoxicilline',
                'Cétirizine',
                'Oméprazole',
                'Azithromycine',
                'Metformine',
                'Loratadine',
                'Atorvastatine',
                'Dexaméthasone'
            ]),
            'description' => $this->faker->sentence(),
            'forme' => $this->faker->randomElement([
                'Comprimé',
                'Sirop',
                'Injection',
                'Gel',
                'Capsule'
            ]),
            'dosage' => $this->faker->randomElement([
                '500',
                '250',
                '100',
                '5',
                '10'
            ]),
            'unite_dosage' => $this->faker->randomElement([
                'mg',
                'mg',
                'mg',
                'ml',
                'mg'
            ]),
            'prix' => $this->faker->numberBetween(500, 50000),
        ];
    }
}
