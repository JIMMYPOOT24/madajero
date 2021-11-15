<?php

namespace App\Http\Controllers;

use App\Models\mclientes;
use Illuminate\Http\Request;

class tbclientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datotbclientes = mclientes::paginate();
        return view('dash.crudclientes.index', compact('datotbclientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.crudclientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoscliente = request()->except('_token');

        if ($request->hasFile('logo')) {
            $datoscliente['logo'] = $request->file('logo')->store('images', 'public');
        }

        mclientes::insert( $datoscliente);
        return redirect('/datostbclientes');
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
        $datoscliente = mclientes::findOrFail($id);
        return view('dash.crudclientes.edit', compact('datoscliente'));
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
        //metodos update para nosotros 
        $datoscliente = request()->except(['_token', '_method']);
        mclientes::where('id', '=', $id)->update($datoscliente);
        $datoscliente = mclientes::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('logo')) {
            $datoscliente['logo'] = $request->file('logo')->store('images', 'public');
            $datoscliente->update();
        }

        return view('dash.crudclientes.edit', compact('datoscliente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mclientes::destroy($id);
        return redirect('/datostbclientes');
    }
}
