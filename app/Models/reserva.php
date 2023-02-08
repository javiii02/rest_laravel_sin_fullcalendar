<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    protected $table = "reservas";

    protected $primaryKey = "id";

    protected $fillable = [
        'id_cliente',
        'id_invitado',
        'id_invitado',
        'id_menu',
        'id_mesa',
        'fecha_reserva',
        'num_tarjeta',
        'num_personas',
        'created_at',
        'update_at',
    ];
}
