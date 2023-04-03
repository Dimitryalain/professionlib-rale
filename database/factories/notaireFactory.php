<?php

namespace Database\Factories;

use App\Models\notaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class notaireFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = notaire::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "specialite" => $this->faker->text,
            "telephone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "geolocalisation" => $this->faker->text,
            "presentation" => $this->faker->text,
            "commentaire" => $this->faker->text,
            "tarif" => $this->faker->text,
            "photo" => $this->faker->imageUrl(),
            'action' => array_rand(["A", "D"], 1),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
        ];
    }
}
