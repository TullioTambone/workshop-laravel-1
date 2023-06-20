<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pizzas = Pizza::all();  
        return view('pages.crud.index', compact('Pizzas'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singolaPizza = Pizza::findOrFail($id);
        return view('pages.crud.show', compact('singolaPizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function edit(sr $sr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sr $sr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function destroy(sr $sr)
    {
        //
    }
}
