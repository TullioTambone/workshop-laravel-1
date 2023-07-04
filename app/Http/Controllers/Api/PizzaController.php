<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizza = Pizza::all();

        return response()->json([
            'success' => true,
            'pizza' => $pizza
        ]);
    }

    public function show($id){
        $pizza = Pizza::all()->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'pizza' => $pizza
        ]);
    }
}