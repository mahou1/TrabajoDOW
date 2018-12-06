<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use App\Tour;
use Illuminate\Http\Request;
use App\Http\Requests\UbicacionesRequest;

class UbicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones = Ubicacion::all();
        return view('ubicaciones.index',compact('ubicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ubicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UbicacionesRequest $request)
    {
        $ubicacion = request(['nombre']);
        Ubicacion::create($ubicacion);
        return redirect('/ubicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo $ubicacion;
        $ubicacion = Ubicacion::find($id);
        $tours = Tour::all();
        return view('ubicaciones.edit',compact('ubicacion','tours'));
    }
    public function editar(Request $request){
      dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacion $ubicacion)
    {
      $ubicacion = Ubicacion::find($request->id);
      $ubicacion->nombre = $request->nombre;
      $ubicacion->save();
    //  $ubicacion->update(request(['nombre']));
      return redirect('/ubicaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      Ubicacion::destroy($id);
      return redirect('/ubicaciones');
    }
}
