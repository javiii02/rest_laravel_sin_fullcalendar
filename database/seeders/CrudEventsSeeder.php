<?php

namespace Database\Seeders;

use App\Models\CrudEvents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrudEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '18:00';
        $crud->estado = 'available';
        $crud->save();

        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '18:15';
        $crud->estado = 'available';
        $crud->save();

        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '18:30';
        $crud->estado = 'available';
        $crud->save();

        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '19:00';
        $crud->estado = 'available';
        $crud->save();

        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '19:15';
        $crud->estado = 'available';
        $crud->save();

        $crud = new CrudEvents();
        $crud->fecha = '2023-01-28';
        $crud->hora = '19:30';
        $crud->estado = 'available';
        $crud->save();

    }
}
