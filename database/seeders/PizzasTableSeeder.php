<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pizza;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newPizza = new Pizza();
            $newPizza->name = $faker->randomElement(['Margherita','Capricciosa','Diavola','Marinara']);
            $newPizza->type = $faker->randomElement(['Ruota di carro','Contemporanea','romana', 'Alla pala','In teglia']);
            $newPizza->hydration = $faker->numberBetween(60, 100);
            $newPizza->price = $faker->numberBetween(4, 12);
            $newPizza->ingredients = $faker->randomElement(['Mozzarella', 'Salsa di pomodoro', 'Funghi', 'Salame', 'Carciofi', 'Olive']);
            $newPizza->flour_type = $faker->randomElement(['Tipo 00', 'Tipo 1', 'Tipo 2', 'Integrale', 'Senatore cappelli', 'Kamut']);
            $newPizza->save();
        }
    }
}
