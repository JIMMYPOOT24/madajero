<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mtablaservicio;
use App\Models\serviciosModel;

class tbserviciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datotbservicio = mtablaservicio::paginate();
        return view('dash.crudtbservicios.index', compact('datotbservicio'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.crudtbservicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datostbservicio = request()->except('_token');

        if ($request->hasFile('url_img')) {
            $datostbservicio['url_img'] = $request->file('url_img')->store('images', 'public');
        }

        mtablaservicio::insert($datostbservicio);
        return redirect('/datostbservicios');
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
        $datostbservicio = mtablaservicio::findOrFail($id);
       

        return view('dash.crudtbservicios.edit', compact('datostbservicio'));
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
        $datostbservicio= request()->except(['_token', '_method']);
        mtablaservicio::where('id', '=', $id)->update($datostbservicio);
        $datostbservicio = mtablaservicio::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_img')) {
            $datostbservicio['url_img'] = $request->file('url_img')->store('images', 'public');
            $datostbservicio->update();
        }

        return view('dash.crudtbservicios.edit', compact('datostbservicio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mtablaservicio::destroy($id);
        return redirect('/datostbservicios');
    }
}
