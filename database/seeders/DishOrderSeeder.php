<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $DishOrderAssociations = [

            [
                'dish_id' => 14, 
                'order_id' => 1, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 14, 
                'order_id' => 2, 
                'quantity' => 2,
            ],
            [
                'dish_id' => 16, 
                'order_id' => 3, 
                'quantity' => 2,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 4, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 16, 
                'order_id' => 5, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 6, 
                'quantity' => 4,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 7, 
                'quantity' => 2,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 8, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 9, 
                'quantity' => 5,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 10, 
                'quantity' => 1,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 11, 
                'quantity' => 2,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 12, 
                'quantity' => 4,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 13, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 14, 
                'quantity' => 2,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 15, 
                'quantity' => 1,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 16, 
                'quantity' => 3,
            ],
            [
                'dish_id' => 31, 
                'order_id' => 17, 
                'quantity' => 5,
            ],
            // altri ristoranti
           
        ];

        // Associa i pianni agli ordini
        foreach ($DishOrderAssociations as $association) {
            $dish = Dish::find($association['dish_id']);
            $dish->orders()->attach($association['order_id'], ['quantity'=> $association['quantity']]);
        }

    }
}
