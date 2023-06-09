<?php

namespace App\Http\Controllers;

use App\Models\propuestas;
use Illuminate\Http\Request;

class PropuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('propuesta');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('propuestaProfesor');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosPropuesta = request()->except('_token');
        if($request->hasFile('documento')){
            $datosPropuesta['documento']=$request->file('documento')->store('uploads','public');
        }
        propuestas::insert($datosPropuesta);
        return view('propuesta');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\propuestas  $propuestas
     * @return \Illuminate\Http\Response
     */
    public function show(propuestas $propuestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\propuestas  $propuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(propuestas $propuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\propuestas  $propuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propuestas $propuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\propuestas  $propuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(propuestas $propuestas)
    {
        //
    }
}
