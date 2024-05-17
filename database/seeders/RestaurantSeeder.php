<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $restaurants = [
            [
                'name' => 'Taverna tradizionale',
                'img' => 'https://www.trevisotoday.it/~media/horizontal-hi/62228940440448/46230548_2165621676803493_484246777961119744_n.jpg',
                'description' => 'locale dove mangiare cibo tipico',
                'address' => 'Via Rossi, Casarano, Italy',
                'vat' => 'IT12345678901', 
                'phone_number' => '+39 333 123 4567',
                'user_id' => 1,
            ],
            [
                'name' => 'Roba di Mare',
                'img' => 'https://media-assets.lacucinaitaliana.it/photos/61fb0393f9bff304ce3ec288/16:9/w_2560%2Cc_limit/Il-meglio-del-lago-di-Orta.jpg', 
                'description' => 'ristorante di pesce sul lago',
                'address' => '456 Via Roma, Como, Italy',
                'vat' => 'IT98765432100', 
                'phone_number' => '+39 348 765 4321',
                'user_id' => 2,
            ],
            [
                'name' => 'bottega del gusto',
                'img' => 'https://www.visitareroma.com/wp-content/uploads/2019/10/Ristoranti-Roma.jpg', 
                'description' => 'locale nel centro storico',
                'address' => '789 Via Cavour, Casarano, Italy',
                'vat' => 'IT01234567892', 
                'phone_number' => '+39 320 987 6543',
                'user_id' => 3,
            ],
            [
                'name' => 'Pizzeria Napoli',
                'img' => 'https://marinasveva.com/wp-content/uploads/2022/06/ristorante-pizzeria-al.jpg', 
                'description' => 'Pizzeria autentica dove assaggiare la vera pizza napoletana',
                'address' => '1011 Corso Vittorio Emanuele, Napoli, Italy',
                'vat' => 'IT23456789012', 
                'phone_number' => '+39 392 012 3456',
                'user_id' => 4,
            ],
            [
                'name' => 'SteakHouse',
                'img' => 'https://www.corriere.it/methode_image/2022/11/14/Cucina/Foto%20Cucina%20-%20Trattate/linas-kteF--590x445@Corriere-Web-Sezioni.jpg', 
                'description' => 'Ristorante dove mangiare la fiorentina',
                'address' => '1213 Via Dante, Firenze, Italy',
                'vat' => 'IT34567890123', 
                'phone_number' => '+39 366 543 2109',
                'user_id' => 5,
            ],
        ];

        foreach($restaurants as $restaurant) {

            $newRestaurant = new Restaurant();

            $newRestaurant->name = $restaurant['name'];
            $newRestaurant->img = $restaurant['img'];
            $newRestaurant->description = $restaurant['description'];
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->vat = $restaurant['vat'];
            $newRestaurant->phone_number = $restaurant['phone_number'];
            $newRestaurant->user_id = $restaurant['user_id'];

            $newRestaurant->save();

        }
    }
}
