<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtablaservicio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_servicio';// <-- El nombre personalizado
}
