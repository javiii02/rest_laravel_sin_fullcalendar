<?php

namespace Database\Seeders;

use App\Models\tarjeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tarjeta::factory(10)->create();

        $user = new tarjeta();
        $user->num_tarjeta="4569125489635412";
        $user->mes_caducidad="may";
        $user->anyo_caducidad = 2025;
        $user->cvv = 478;
        $user->id_cliente = null;
        $user->save();

    }
}
