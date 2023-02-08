<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarjeta>
 */
class TarjetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'num_tarjeta'=> $this->faker->randomFloat(2, 80, 200),
            'mes_caducidad'=> fake()->month(),
            'anyo_caducidad'=> fake()->dateTimeBetween('-1 day'),
            'cvv'=> $this->faker->randomNumber(3),
            'id_cliente'=> $this->faker->randomNumber(2),
            'created_at'=> now(),
            'updated_at'=> now(),
        ];
    }
}
