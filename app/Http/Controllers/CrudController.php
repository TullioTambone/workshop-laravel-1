<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Ingredient;
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
        $ingredients = Ingredient::all();
        return view('pages.crud.create', compact('ingredients'));
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
                "name" => "required",
                'ingredients' => 'exists:ingredients,id'
            ],
            [
                "name.required" => 'il nome é obbligatorio'
            ]
        );

        $form_data = $request->all();

        $newpizza = new Pizza();

        $newpizza->fill($form_data);

        $newpizza->save();

        if($request->has('ingredients')){
            $newpizza->ingredients()->attach($request->ingredients);
        }

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
    public function edit(Pizza $pizza)
    {
        
        return view('pages.crud.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sr  $sr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $my_pizza = Pizza::findOrFail($id);
        $my_pizza->update($form_data);
        return redirect()->route('pages.index');
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
