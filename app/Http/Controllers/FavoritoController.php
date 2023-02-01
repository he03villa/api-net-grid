<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Favorito::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => ['required'],
            'ref_api' => ['required']
        ]);
        $favorito = new Favorito;
        $favorito->id_usuario = $request->id_usuario;
        $favorito->ref_api = $request->ref_api;
        $favorito->save();        
        return $favorito;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favorito = Favorito::where('id_usuario', $id)->get();
        return $favorito;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorito $favorito)
    {
        $request->validate([
            'id_usuario' => ['required'],
            'ref_api' => ['required']
        ]);
        $favorito->id_usuario = $request->id_usuario;
        $favorito->ref_api = $request->ref_api;
        $favorito->update();        
        return $favorito;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorito $favorito)
    {
        $favorito->delete();
        return [];
    }
}
