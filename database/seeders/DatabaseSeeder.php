<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ActiveCountryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
    */
    public function run()
    {
        // \App\Models\ActiveCountry::factory()->create();
        // \App\Models\User::factory(10)->create();

        \App\Models\ActiveCountry::factory()->create([
            'name' => "portugal",
            'flag' => "https://www.estudopratico.com.br/wp-content/uploads/2016/04/bandeira-portugal-1200x675.jpg",
        ]);

        \App\Models\ActiveCountry::factory()->create([
            'name' => "brasil",
            'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png",
        ]);

        \App\Models\ActiveCountry::factory()->create([
            'name' => "senegal",
            'flag' => "https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg",
        ]);

        \App\Models\ActiveCountry::factory()->create([
            'name' => "marrocos",
            'flag' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDInDXIGDe3DBrdjTto4GN3UflQOVHfHuzEg&usqp=CAU",
        ]);
    }
}
