<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;


    // relazione restaurant con user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relazione restaurant con Dishes (uno a molti)
    public function dishes(){
        return $this->hasMany(Dish::class);
    }
}
