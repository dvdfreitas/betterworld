<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActiveCountry>
 */
class ActiveCountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "portugal",
            'flag' => "https://www.estudopratico.com.br/wp-content/uploads/2016/04/bandeira-portugal-1200x675.jpg",
        ];
    }
}
