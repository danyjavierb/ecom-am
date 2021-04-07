<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //protected $table = 'empresas';
    // Ciudad -> ciudads
    use HasFactory;

    public function empleados() {
        return $this->hasMany(Empleado::class);
    }
}
