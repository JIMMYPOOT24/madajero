<?php

namespace App\Http\Controllers;

use App\Models\inicioModel;
use App\Models\mtablaproyectos;
use App\Models\proyectosModel;
use Illuminate\Http\Request;

class proyectosController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datosproyecto = proyectosModel::find(1);
        $datosinicio = inicioModel::find(1);
        $datostbproyecto = mtablaproyectos::paginate();
        return view ('proyects', compact('datostbproyecto', 'datosproyecto','datosinicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosproyecto = proyectosModel::find(1);
        $datoproyecto = proyectosModel::all();

        return view('dash.crudproyectos.edit', compact('datosproyecto', 'datoproyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosproyecto= request()->except(['_token', '_method']);
        proyectosModel::where('id', '=', $id)->update( $datosproyecto);
        $datosproyecto = proyectosModel::findOrFail($id);

        if ($request->hasFile('img1_proyectos')) {
            $datosproyecto['img1_proyectos'] = $request->file('img1_proyectos')->store('images', 'public');
            $datosproyecto->update();
        }
      

          //Solicitar todos los datos para mostrar
          $datoproyecto = proyectosModel::all();
  
          return view('dash.crudproyectos.edit', compact('datoproyecto', 'datosproyecto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
