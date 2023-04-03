<?php

namespace Database\Factories;

use App\Models\visiteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class visiteurFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = visiteur::class;
    
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
            "telephone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "date_nais" => $this->faker->dateTimeBetween("1960-01-01","1999-12-31"),
            "mdp" => $this->faker->password(),
            "conf_mdp" => $this->faker->password()
        ];
    }
}
