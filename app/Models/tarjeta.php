<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarjeta extends Model
{
    use HasFactory;

    protected $table = 'tarjetas';

    protected $primaryKey = 'num_tarjeta';

    protected $fillable = [
        'id_cliente',
        'mes_caducidad',
        'anyo_caducidad',
        'cvv',
    ];
}
