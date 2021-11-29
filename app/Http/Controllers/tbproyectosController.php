<?php

namespace App\Http\Controllers;

use App\Models\mtablaproyectos;
use Illuminate\Http\Request;

class tbproyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datotbproyectos = mtablaproyectos::paginate();
        return view('dash.crudtbproyectos.index', compact('datotbproyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.crudtbproyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datostbproyectos  = request()->except('_token');

        if ($request->hasFile('url_img')) {
            $datostbproyectos ['url_img'] = $request->file('url_img')->store('images', 'public');
        }
        if ($request->hasFile('url_img2')) {
            $datostbproyectos ['url_img2'] = $request->file('url_img2')->store('images', 'public');
        }
        if ($request->hasFile('url_img3')) {
            $datostbproyectos ['url_img3'] = $request->file('url_img3')->store('images', 'public');
        }
        if ($request->hasFile('url_img4')) {
            $datostbproyectos ['url_img4'] = $request->file('url_img4')->store('images', 'public');
        }
        if ($request->hasFile('url_img5')) {
            $datostbproyectos ['url_img5'] = $request->file('url_img5')->store('images', 'public');
        }

        mtablaproyectos::insert( $datostbproyectos);
        return redirect('/datostbproyectos');
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
        $datostbproyectos = mtablaproyectos::findOrFail($id);
       

        return view('dash.crudtbproyectos.edit', compact('datostbproyectos'));
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
        $datostbproyectos= request()->except(['_token', '_method']);
        mtablaproyectos::where('id', '=', $id)->update($datostbproyectos);
        $datostbproyectos = mtablaproyectos::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_img')) {
            $datostbproyectos['url_img'] = $request->file('url_img')->store('images', 'public');
            $datostbproyectos->update();
        }

        if ($request->hasFile('url_img2')) {
            $datostbproyectos['url_img2'] = $request->file('url_img2')->store('images', 'public');
            $datostbproyectos->update();
        }

        if ($request->hasFile('url_img3')) {
            $datostbproyectos['url_img3'] = $request->file('url_img3')->store('images', 'public');
            $datostbproyectos->update();
        }
        if ($request->hasFile('url_img4')) {
            $datostbproyectos['url_img4'] = $request->file('url_img4')->store('images', 'public');
            $datostbproyectos->update();
        }
        if ($request->hasFile('url_img5')) {
            $datostbproyectos['url_img5'] = $request->file('url_img5')->store('images', 'public');
            $datostbproyectos->update();
        }





        return view('dash.crudtbproyectos.edit', compact('datostbproyectos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mtablaproyectos::destroy($id);
        return redirect('/datostbproyectos');
    }
}
