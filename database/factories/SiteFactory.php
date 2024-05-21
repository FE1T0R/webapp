<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Site;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Site>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement([1,2,3,4,5]),
            'name_s' => fake()->randomElement(['Netflix','Facebook','Aula Virtual','Paypal','Disney','Hotmail','Mercado Libre','Biblored','MiClaro','MovistarApp','Disney','Gef','Reebok','ASIS','Youtube','Steam','Tidal','Amazon','WSchool','Nvidia','Spotify','Computador Oficina','Sistema Contable','Seguridad Social','EPS Sura','Cerveceria']),
            'email_s' => fake()->safeEmail(),
            'username_s' => fake()->userName,
            'password_s' => fake()->password,
            'icon_s' => '../public/multimedia/icon-www.png'
        ];
    }
}
