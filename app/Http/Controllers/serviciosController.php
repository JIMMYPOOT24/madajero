<?php

namespace App\Http\Controllers;

use App\Models\mtablaservicio;
use App\Models\serviciosModel;
use Illuminate\Http\Request;

class serviciosController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datoservicio = serviciosModel::find(1);
        $datotbservicio = mtablaservicio::paginate();
        return view ('services', compact('datoservicio', 'datotbservicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $datosservicio = serviciosModel::all();
        $datoservicio = serviciosModel::find(1);

        return view('dash.crudservicios.edit', compact('datosservicio', 'datoservicio'));
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
        $datoservicio = request()->except(['_token', '_method']);
        serviciosModel::where('id', '=', $id)->update($datoservicio);
        $datoservicio = serviciosModel::findOrFail($id);

        if ($request->hasFile('img1_servicios')) {
            $datoservicio['img1_servicios'] = $request->file('img1_servicios')->store('images', 'public');
            $datoservicio->update();
        }
      

          //Solicitar todos los datos para mostrar
          $datosservicio = serviciosModel::all();
  
          return view('dash.crudservicios.edit', compact('datoservicio', 'datosservicio'));
          
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
