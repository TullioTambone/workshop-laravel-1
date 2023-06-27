<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            'Mozzarella',
            'Pomodoro',
            'Funghi',
            'Prosciutto Crudo',
            'Olive Nere',
            'Peperoni',
            'Cipolla',
            'Salame',
            'Basilico',
            'Salsiccia', 
        ];
        
        foreach ($ingredients as $elem) {
            $new_ingredient = new Ingredient();
            $new_ingredient->nome = $elem;
            $new_ingredient->save();
        }
    }
}
