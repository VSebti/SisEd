<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutor';
    protected $primaryKey = 'id_tutor';

    protected $fillable = [
        'nombre', 
        'apellido', 
        'Email', 
        'Telefono'
    ];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_tutor');
    }
}
