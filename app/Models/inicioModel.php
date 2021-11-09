<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inicioModel extends Model

{
    public $timestamps = false;

    
    use HasFactory;
    protected $table = "inicio";// <-- El nombre personalizado
}
