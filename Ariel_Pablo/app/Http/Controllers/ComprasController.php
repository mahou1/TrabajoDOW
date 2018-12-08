<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Compra;
use Illuminate\Http\Request;
use App\Tour;
use App\Sesion;
use App\Http\Requests\ComprasRequest;
use Illuminate\Support\Facades\Auth;

class ComprasController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idTour)
    {

        $tour = Tour::find($idTour);
        $sesiones = Sesion::where('idTour',$idTour)->where('fecha','>=',Carbon::now()->toDateString())->get();

        return view('/compras/create',compact('tour','sesiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComprasRequest $request)
    {
      $compra = request(['idSesion','cant_participantes','monto']);
      $compra['idUsuario']= Auth::id();
      $compra['fecha']=Carbon::now()->toDateTimeString();
      Compra::create($compra);
      $sesion = Sesion::find($request->idSesion);
      $sesion->disponibilidad= $sesion->disponibilidad - $request->cant_participantes;
      // dd($sesion->disponibilidad);
      $sesion->update(request(['idSesion']));
      return redirect('/tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
