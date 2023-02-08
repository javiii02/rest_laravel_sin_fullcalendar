<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitado extends Model
{
    use HasFactory;

    protected $table = 'invitados';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'nombre',
        'telefono',
        'created_at',
        'updated_at',
    ];
}
