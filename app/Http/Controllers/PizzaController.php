<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function getPizza(){
        $pizzas = Pizza::All();
        return view('pages.home', compact('pizzas'));
    }
}
