<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=["nombre","creditos","nombre_docente","asignatura prerrequisito","cantidad de horas de trabajo autónomo","cantidad de horas de trabajo dirigido"];
}
