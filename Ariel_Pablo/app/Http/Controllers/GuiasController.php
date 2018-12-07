<?php

namespace App\Http\Controllers;

use App\Guia;
use Illuminate\Http\Request;
use App\Http\Requests\GuiasRequest;



class GuiasController extends Controller
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
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      $guias = Guia::all();
      return view('guias.index',compact('guias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      return view('guias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuiasRequest $request)
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      $guia = request(['nombre','telefono','correo','descripcion']);
      Guia::create($guia);
      return redirect('/guias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function show(Guia $guia)
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      return view('guias.show',compact('guia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function edit(Guia $guia)
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      return view('guias.edit',compact('guia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function update(GuiasRequest $request, Guia $guia)
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }

      $guia->update(request(['nombre','telefono','correo','descripcion']));
      return redirect('/guias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guia $guia)
    {
      if(\Gate::denies('permiso',Guia::class)){
        return redirect('/');
      }
      
      $guia = Guia::find($guia->id);
      if($guia->sesiones){
          $guia->delete();
      }else{
        $guia->forcedelete();
      }


      return redirect('/guias');
    }
}
