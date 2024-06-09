<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';

    protected $fillable = [
        'nombre', 
        'apellido', 
        'Codigo', 
        'id_tutor', 
        'id_curso'
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_estudiante');
    }
}
