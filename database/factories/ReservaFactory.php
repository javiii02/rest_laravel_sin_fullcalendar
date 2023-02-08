<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=> $this->faker->randomFloat(2, 80, 200),
            'id_cliente'=> $this->faker->randomFloat(2, 80, 200),
            'id_invitado'=> null,
            'id_menu'=> $this->faker->randomFloat(2, 80, 200),
            'id_mesa'=> $this->faker->randomFloat(2, 80, 200),
            'fecha_reserva'=> now(),
            'num_tarjeta'=> $this->faker->randomFloat(2, 80, 200),
            'num_personas'=> $this->faker->randomNumber(2),
            'created_at'=> now(),
            'update_at'=> now(),
        ];
    }
}