<?php

namespace App\Http\Controllers;

use App\Sesion;
use App\Tour;
use Illuminate\Http\Request;
use App\Guia;
class SesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sesiones = Sesion::all();
      
        return view('sesiones.index',compact('sesiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guias = Guia::all();
      $tours = Tour::all();
      return view('sesiones.create',compact('tours','guias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sesion = request(['idTour','fecha']);
        $tour = Tour::find($request->idTour);
        $sesion['disponibilidad'] = $tour->max_personas;
        Sesion::create($sesion);
        $sesion = Sesion::all()->last();
           $guias= $request->guias;
        if($guias){
          foreach ($guias as $key => $guia) {
             $sesion->guias()->attach($guia);
          }
        }

        return redirect('/sesiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show(Sesion $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $sesion)
    {
        $tours = Tour::all();
        return view('sesiones.edit',compact('sesion','tours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesion $sesion)
    {
        //
    }
}
