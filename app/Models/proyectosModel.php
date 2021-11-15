<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectosModel extends Model
{
    public $timestamps = false;
    protected $table = "proyectos";// <-- El nombre personalizado
}
