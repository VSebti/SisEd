<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $primaryKey = 'id_cargo';

    protected $fillable = ['cargo'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_cargo');
    }
}
