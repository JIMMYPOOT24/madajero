<?php

namespace App\Http\Controllers;

use App\Models\mcertificacion;
use Illuminate\Http\Request;

class certificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = mcertificacion::paginate();
       
        return view('dash.crudcarrusel.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.crudcarrusel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosbanner = request()->except('_token');

        if ($request->hasFile('url_img')) {
            $datosbanner['url_img'] = $request->file('url_img')->store('images', 'public');
        }

        mcertificacion::insert($datosbanner);
        return redirect('/datoscertificaciones');
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
        $datosbanner = mcertificacion::findOrFail($id);
        return view('dash.crudcarrusel.edit', compact('datosbanner'));
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
        $datosbanner = request()->except(['_token', '_method']);
        mcertificacion::where('id', '=', $id)->update($datosbanner);
        $datosbanner = mcertificacion::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_img')) {
            $datosbanner['url_img'] = $request->file('url_img')->store('images', 'public');
            $datosbanner->update();
        }

        return view('dash.crudcarrusel.edit', compact('datosbanner'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       mcertificacion::destroy($id);
        return redirect('/datoscertificaciones');
    }
}
