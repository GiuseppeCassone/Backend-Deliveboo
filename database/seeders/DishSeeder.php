<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                "name" => "Pizza Margherita",
                "img" => "https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=915&v=1644590028&width=1200",
                "price" => 10.00,
                "description" => "La classica pizza con pomodoro, mozzarella e basilico fresco.",
                "ingredients" => "Pomodoro, mozzarella, basilico, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Spaghetti Carbonara",
                "img" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Espaguetis_carbonara.jpg",
                "price" => 12.00,
                "description" => "Un primo piatto tipico romano a base di guanciale, uova, pecorino romano e pepe nero.",
                "ingredients" => "Guanciale, uova, pecorino romano, pepe nero, spaghetti",
                "is_visible" => true,
                "restaurant_id" => 2

            ],
            [
                "name" => "Lasagna al ragù",
                "img" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/12/LASAGNA_SAPORITA_SITO-6.jpg",
                "price" => 15.00,
                "description" => "Un piatto ricco e saporito a base di pasta sfoglia, ragù di carne, besciamella e Parmigiano Reggiano.",
                "ingredients" => "Ragu di carne macinata, besciamella, Parmigiano Reggiano, pasta sfoglia, pomodoro, cipolla, sedano, carota",
                "is_visible" => true,
                "restaurant_id" => 3

            ],
            [
                "name" => "Bistecca alla Fiorentina",
                "img" => "https://shop.agricolasangiobbe.it/wp-content/uploads/2019/06/Ricetta-Fiorentina.jpg",
                "price" => 25.00,
                "description" => "Un taglio pregiato di carne di manzo cotto alla brace, tipico della Toscana.",
                "ingredients" => "Bistecca di manzo Chianina, sale grosso, pepe nero, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 4

            ],
            [
                "name" => "Tiramisù",
                "img" => "https://www.cucina-naturale.it/wp-content/uploads/2016/11/tiramisu.jpg",
                "price" => 8.00,
                "description" => "Un dolce classico italiano a base di savoiardi, caffè, mascarpone, cacao amaro e uova.",
                "ingredients" => "Savoiardi, caffè, mascarpone, uova, zucchero, cacao amaro",
                "is_visible" => true,
                "restaurant_id" => 5

            ]
        
        ];

        foreach($dishes as $dish){

             $newDish = new Dish();
             $newDish->name = $dish['name'];
             $newDish->img = $dish['img'];
             $newDish->price = $dish['price'];
             $newDish->description = $dish['description'];
             $newDish->ingredients = $dish['ingredients'];
             $newDish->is_visible = $dish['is_visible'];
             $newDish->restaurant_id = $dish['restaurant_id'];

             $newDish->save();
        }

    }
}
