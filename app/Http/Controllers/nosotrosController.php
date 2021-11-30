<?php

namespace App\Http\Controllers;

use App\Models\mcertificacion;
use App\Models\nosotrosModel;
use Illuminate\Http\Request;

class nosotrosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datosnosotros = nosotrosModel::all();
        $datonosotros = nosotrosModel::find(1);
       

        return view('dash.crudnosotros.edit', compact('datosnosotros', 'datonosotros'));
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
        $datonosotros = request()->except(['_token', '_method']);
        nosotrosModel::where('id', '=', $id)->update($datonosotros);
        $datonosotros = nosotrosModel::findOrFail($id);

        if ($request->hasFile('img1_nosotros')) {
            $datonosotros['img1_nosotros'] = $request->file('img1_nosotros')->store('images', 'public');
            $datonosotros->update();
        }
        if ($request->hasFile('img2_nosotros')) {
            $datonosotros['img2_nosotros'] = $request->file('img2_nosotros')->store('images', 'public');
            $datonosotros->update();
        }
        if ($request->hasFile('curriculum')) {
            $datonosotros['curriculum'] = $request->file('curriculum')->store('docs', 'public');
            $datonosotros->update();
        }

          //Solicitar todos los datos para mostrar
          $datosnosotros = nosotrosModel::all();
  
          return view('dash.crudnosotros.edit', compact('datosnosotros', 'datonosotros'));
          
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
