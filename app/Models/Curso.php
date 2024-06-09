<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'id_curso';

    protected $fillable = ['curso'];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_curso');
    }
}
