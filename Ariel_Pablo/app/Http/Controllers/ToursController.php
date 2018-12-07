<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use App\Ubicacion;
use App\Http\Requests\ToursRequest;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth')->except(['index','show']);
     }
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(\Gate::denies('create',Tour::class)){
          return redirect('/tours');
        }
        $ubicaciones = Ubicacion::all();
        return view('tours.create',compact('ubicaciones'));

        // $this->authorize('create',Tour::class);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToursRequest $request)
    {
        //dd($request->guias);
        $tour = request(['idUbicacion','nombre','descripcion','precio','duracion','max_personas']);
        $foto = $request->file('imagen');
        $tour['imagen']=$foto->openFile()->fread($foto->getSize());
        Tour::create($tour);

        return redirect('/tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
      return view('tours.show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $ubicaciones=Ubicacion::all();
        return view('tours.edit',compact('tour','ubicaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(ToursRequest $request, Tour $tour)
    {

        $newTour =  request(['idUbicacion','nombre','descripcion','precio','duracion','max_personas']);
        $foto = $request->file('imagen');
        $newTour['imagen']=$foto->openFile()->fread($foto->getSize());
        $tour->update($newTour);
        return redirect('/tours');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
      $tour = Tour::find($tour->id);
      $tour->delete();
      return redirect('/tours');
    }
}
