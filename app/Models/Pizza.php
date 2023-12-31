<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'pizzas';

    protected $fillable = ['name','type','hydration','price', 'flour_type'];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}