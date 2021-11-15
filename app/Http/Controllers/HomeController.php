<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inicioModel;
use App\Models\mclientes;
use App\Models\mtablaproyectos;
use App\Models\mtablaservicio;
use App\Models\nosotrosModel;
use App\Models\serviciosModel;


class HomeController extends Controller
{
    public function __invoke(){

        $datosinicio = inicioModel::find(1);
        $datoservicio1 = mtablaservicio::find(1);
        $datoservicio2 = mtablaservicio::find(2);
        $datoservicio3 = mtablaservicio::find(3);
        $datoservicio4 = mtablaservicio::find(4);

        $datonosotros = nosotrosModel::find(1);

        $datoproyecto1 = mtablaproyectos::find(1);
        $datoproyecto2 = mtablaproyectos::find(2);
        $datoproyecto3 = mtablaproyectos::find(3);
        $datoproyecto4 = mtablaproyectos::find(4);
        $datoproyecto5 = mtablaproyectos::find(5);
        $datoproyecto6 = mtablaproyectos::find(6);
        
        $datocliente1 = mclientes::find(1);
        $datocliente2 = mclientes::find(2);
        $datocliente3 = mclientes::find(3);
        $datocliente4 = mclientes::find(4);

        $clientes = mclientes::paginate(5);


        
       
       
      
        return view ('home', compact('datosinicio','datoservicio1','datoservicio2','datoservicio3','datoservicio4', 'datonosotros','datoproyecto1',
        'datoproyecto2', 'datoproyecto3', 'datoproyecto4','datoproyecto5','datoproyecto6','datocliente1','datocliente2',
    'datocliente3','datocliente4','clientes'));
    }
}
