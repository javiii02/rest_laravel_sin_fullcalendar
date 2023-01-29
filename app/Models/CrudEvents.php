<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CrudEvents extends Model
{
    use HasFactory;
    
    protected $table = 'crud_events';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'hora', 'estado'];

}