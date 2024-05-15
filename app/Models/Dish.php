<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img', 'price', 'description', 'ingredients' ,'is_visible', 'restaurant_id'];

    // relazione di Dishes con restaurant
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    // relazione orders con dishes (molti-a-molti)
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
