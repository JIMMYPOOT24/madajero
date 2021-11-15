<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviciosModel extends Model
{
    public $timestamps = false;
    protected $table = "servicios";// <-- El nombre personalizado
}
