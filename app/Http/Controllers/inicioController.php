<?php

namespace App\Http\Controllers;

use App\Models\inicioModel;
use Illuminate\Http\Request;

class inicioController extends Controller
{
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
        //
        $datosinicio = inicioModel::all();
        $datoinicio = inicioModel::find(1);
        return view('dash.crudinicio.edit', compact('datosinicio', 'datoinicio'));

        
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
        
        $datoinicio = request()->except(['_token', '_method']);
        inicioModel::where('id', '=', $id)->update($datoinicio);
        $datoinicio = iniciomodel::findOrFail($id);

        if ($request->hasFile('img1_inicio')) {
            $datoinicio['img1_inicio'] = $request->file('img1_inicio')->store('images', 'public');
            $datoinicio->update();
        }
        if ($request->hasFile('img2_inicio')) {
            $datoinicio['img2_inicio'] = $request->file('img2_inicio')->store('images', 'public');
            $datoinicio->update();
        }

        //Solicitar todos los datos para mostrar
        $datosinicio =inicioModel::all();
        return view('dash.crudinicio.edit', compact('datosinicio', 'datoinicio'));
        


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
