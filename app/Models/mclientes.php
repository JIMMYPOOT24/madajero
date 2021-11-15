<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mclientes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'clientes';// <-- El nombre personalizado
}
