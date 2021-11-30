<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inicioModel;

class DashController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        
        return view ('dash.index');

    }  
}
