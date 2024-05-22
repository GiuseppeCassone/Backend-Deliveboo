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
                'name' => 'Bottega del gusto',
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
            [
                'name' => 'Ristorante da Franchino er criminale',
                'img' => 'https://www.repstatic.it/content/localirep/img/rep-roma/2023/02/07/223657129-93201798-acc2-4486-b86e-eabe63596906.jpg',
                'description' => 'locale dove mangiare cibo da laboratorio',
                'address' => 'Via Rossi, Roma, Italy',
                'vat' => 'IT12345678901', 
                'phone_number' => '+39 333 123 1111',
                'user_id' => 6,
            ],
            [
                'name' => 'Pizzeria da Michele',
                'img' => 'https://www.bergamonews.it/photogallery_new/images/2024/02/a-bergamo-apre-l-antica-pizzeria-da-michele-764802.large.jpg',
                'description' => 'Pizzeria storica dove mangiare la vera pizza napoletana',
                'address' => 'Via Rossi, Napoli, Italy',
                'vat' => 'IT12345678901', 
                'phone_number' => '+39 222 444 7677',
                'user_id' => 7,
            ],
            [
                'name' => 'Ristorante da Roberto',
                'img' => 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/55ca20ec-3a86-47db-8f23-c1bf56761e36/85370964-4426-4a91-8a5b-a9cfd5c6522e.jpg',
                'description' => 'Cucina tradizionale nel centro città',
                'address' => 'Via dei palloncini, Taranto, Italy',
                'vat' => 'IT12345672222', 
                'phone_number' => '+39 432 543 8765',
                'user_id' => 8,
            ],
            [
                'name' => 'Ristorante da Giuseppe',
                'img' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/2933771.jpg?k=70bedf6ccb05e329e53cae08c9f2299ffdb21c6ad9baf5022c81c7a6f63e80dd&o=&hp=1',
                'description' => 'Cucina tradizionale nel centro città',
                'address' => 'Via dei taralli, Taranto, Italy',
                'vat' => 'IT12345675455', 
                'phone_number' => '+39 432 543 9999',
                'user_id' => 9,
            ],
            [
                'name' => 'KFC',
                'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/1b/99/44/8e/kfc-faxafeni.jpg',
                'description' => 'Fast-food di pollo fritto',
                'address' => 'Via dei Giumelli, Taranto, Italy',
                'vat' => 'IT12345672233', 
                'phone_number' => '+39 789 444 8888',
                'user_id' => 10,
            ],
            [
                'name' => 'McDonald\'s',
                'img' => 'https://img.grouponcdn.com/deal/22sh6xDHFowtfZ3XwHPu4YK3NBx1/22-1500x900/v1/t600x362.jpg',
                'description' => 'Fast-food di hamburger',
                'address' => 'Via Roma, Milano, Italy',
                'vat' => 'IT12345672234', 
                'phone_number' => '+39 789 444 8889',
                'user_id' => 11,
            ],
            [
                'name' => 'Burger King',
                'img' => 'https://i2.res.24o.it/images2010/Editrice/ILSOLE24ORE/ILSOLE24ORE/2021/03/13/Impresa%20e%20Territori/ImmaginiWeb/Ritagli/plant%20based%20Whooper-ktsB--1020x533@IlSole24Ore-Web.png',
                'description' => 'Fast-food di hamburger',
                'address' => 'Via del Corso, Roma, Italy',
                'vat' => 'IT12345672235', 
                'phone_number' => '+39 789 444 8890',
                'user_id' => 12,
            ],
            [
                'name' => 'Donato con mollica o senza',
                'img' => 'https://statics.cedscdn.it/photos/MED_HIGH/92/08/7529208_19122339_img_9827_1_.jpg',
                'description' => 'Con mollica o senza??',
                'address' => 'Via Dante, Napoli, Italy',
                'vat' => 'IT12345672236', 
                'phone_number' => '+39 789 767 8891',
                'user_id' => 13,
            ],
            [
                'name' => 'Nobu',
                'img' => 'https://www.foodandwine.com/thmb/PmmF9VeilTX_wrRuFyWZgg38KKY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/nobu-sushi-tips-sushi-platter-FT-BLOG0318-8c55593ef312451c8dc082b8ec4fef21.jpg',
                'description' => 'Sushi molto buono',
                'address' => 'Via Garibaldi, Milano, Italy',
                'vat' => 'IT12345672444', 
                'phone_number' => '+39 789 444 8892',
                'user_id' => 14,
            ],
            [
                'name' => 'Starbucks',
                'img' => 'https://www.arkadbudapest.hu/fileadmin/user_upload/GLOBAL/brand_stores/logos/starbucks.jpg',
                'description' => 'Caffè e pasticceria',
                'address' => 'Via Veneto, Roma, Italy',
                'vat' => 'IT12345672238', 
                'phone_number' => '+39 789 444 8893',
                'user_id' => 15,
            ]
            
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
