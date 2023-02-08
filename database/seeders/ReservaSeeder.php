<?php

namespace Database\Seeders;

use App\Models\reserva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserva = new reserva();
        $reserva->id="100";
        $reserva->id_cliente="1";
        $reserva->id_invitado = null;
        $reserva->id_menu = '3';
        $reserva->id_mesa="2";
        $reserva->fecha_reserva=now();
        $reserva->num_tarjeta ="1234456325632145";
        $reserva->num_personas = '4';
        $reserva->created_at = now();
        $reserva->update_at = now();

        $reserva->save();
    }
}
