<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ControladorFecha extends Controller
{
    public function guardarFecha(Request $request) {
        $fecha = $request->input('res_date');
        $fechasDisponibles = Reservation::table('tabla')->select('fecha', 'hora')->where('disponible', true)->get();
        
        return redirect()->back()->with('success', 'Fecha guardada exitosamente');
    }
}
