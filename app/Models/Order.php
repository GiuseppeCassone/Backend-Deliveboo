<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_lastname',
        'customer_email',
        'customer_phone',
        'customer_address',
        'order_total',
        'created_at'
    ];

    // relazione dishes con orders (molti-a-molti)
    public function dishes() {
        return $this->belongsToMany(Dish::class)->withPivot('quantity');
    }
}
