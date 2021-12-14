<?php

namespace App\Http\Controllers;

use App\Models\EtatHumeur;
use App\Http\Requests\StoreEtatHumeurRequest;
use App\Http\Requests\UpdateEtatHumeurRequest;

class EtatHumeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEtatHumeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtatHumeurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EtatHumeur  $etatHumeur
     * @return \Illuminate\Http\Response
     */
    public function show(EtatHumeur $etatHumeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EtatHumeur  $etatHumeur
     * @return \Illuminate\Http\Response
     */
    public function edit(EtatHumeur $etatHumeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtatHumeurRequest  $request
     * @param  \App\Models\EtatHumeur  $etatHumeur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtatHumeurRequest $request, EtatHumeur $etatHumeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EtatHumeur  $etatHumeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(EtatHumeur $etatHumeur)
    {
        //
    }
}
