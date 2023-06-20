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
        return view('pages.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required"
            ],
            [
                "name.required" => 'il nome é obbligatorio'
            ]
        );

        $form_data = $request->all();

        $newpizza = new Pizza();

        $newpizza->fill($form_data);

        $newpizza->save();

        return redirect()->route('pages.index');
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
    public function edit()
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Pizza::findOrFail($id)->delete();

        return redirect()->route('pages.index');
    }
}