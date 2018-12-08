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
     public function __construct()
     {
       $this->middleware('auth');
     }
    public function index()
    {
        if(\Gate::denies('permiso',Ubicacion::class)){
          return redirect('/');
        }
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
        if(\Gate::denies('permiso',Ubicacion::class)){
          return redirect('/');
        }

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
        if(\Gate::denies('permiso',Ubicacion::class)){
          return redirect('/');
        }
        $ubicacion = Ubicacion::find($id);
        $tours = Tour::all();
        return view('ubicaciones.edit',compact('ubicacion','tours'));
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
      if(\Gate::denies('permiso',Ubicacion::class)){
        return redirect('/');
      }
      $ubicacion = Ubicacion::find($id);
      $tours = $ubicacion->tours;
      if($tours->isEmpty()){
          $ubicacion->forcedelete();
      }else{
          $ubicacion->delete();
      }
      return redirect('/ubicaciones');
    }
}
