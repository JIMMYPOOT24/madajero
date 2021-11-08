<?php

namespace App\Http\Controllers;

use App\Models\inicioModel;
use App\Models\mcertificacion;
use App\Models\nosotrosModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        $datosinicio = inicioModel::find(1);
        $datonosotros = nosotrosModel::find(1);
        $banner = mcertificacion::paginate();

        return view ('about', compact('datosinicio','datonosotros', 'banner'));


    }
}
