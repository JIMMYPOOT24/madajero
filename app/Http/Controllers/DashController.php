<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inicioModel;

class DashController extends Controller
{
    public function index(){
        
        return view ('dash.index');

    }  
}
