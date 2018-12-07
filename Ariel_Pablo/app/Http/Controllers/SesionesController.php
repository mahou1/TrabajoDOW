<?php

namespace App\Http\Controllers;

use App\Sesion;
use App\Tour;
use Illuminate\Http\Request;
use App\Guia;
use App\Http\Requests\SesionesRequest;
class SesionesController extends Controller
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
        $sesiones = Sesion::has('tour')->get();
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
    public function store(SesionesRequest $request)
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
    public function edit($id)
    {
        // dd($id);
        $guias = Guia::all();
        $tours = Tour::all();
        $sesion = Sesion::find($id);
        return view('sesiones.edit',compact('sesion','tours','guias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sesion = Sesion::find($request->idSesion);
        $sesion->idTour = $request->idTour;
        $sesion->fecha  = $request->fecha;
        $sesion->save();
        $guias= $request->guias;
        $sesion->guias()->sync($guias);
        //$sesion->update(request(['idTour','fecha','disponibilidad']));
        return redirect('/sesiones');
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
