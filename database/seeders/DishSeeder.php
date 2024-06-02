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
                "name" => "Pizza Napoletana",
                "img" => "https://latteriasorrentina.com/wp-content/uploads/2019/06/come-fare-la-vera-pizza-1764x882.jpg",
                "price" => 8.00,
                "description" => "Una pizza classica con pomodoro, mozzarella, olio d'oliva e basilico.",
                "ingredients" => "Impasto per pizza, pomodoro, mozzarella, olio d'oliva, basilico",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Pizza Fritta",
                "img" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/05/Pizza-fritta.jpg",
                "price" => 8.00,
                "description" => "Una pizza fritta con pomodoro, mozzarella, olio d'oliva e basilico.",
                "ingredients" => "Impasto per pizza, pomodoro, mozzarella, olio d'oliva, basilico",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Pizza Calzone",
                "img" => "https://www.fuegowoodfiredovens.com/wp-content/uploads/2021/08/calzone-pizza-1.jpg",
                "price" => 8.50,
                "description" => "Una pizza ripiena con pomodoro, mozzarella, prosciutto cotto e funghi.",
                "ingredients" => "Impasto per pizza, pomodoro, mozzarella, prosciutto cotto, funghi",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Spaghetti Carbonara",
                "img" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Espaguetis_carbonara.jpg",
                "price" => 12.00,
                "description" => "Un primo piatto tipico romano a base di guanciale, uova, pecorino romano e pepe nero.",
                "ingredients" => "Guanciale, uova, pecorino romano, pepe nero, spaghetti",
                "is_visible" => true,
                "restaurant_id" => 6

            ],
            [
                "name" => "Lasagna al ragù",
                "img" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/12/LASAGNA_SAPORITA_SITO-6.jpg",
                "price" => 15.00,
                "description" => "Un piatto ricco e saporito a base di pasta sfoglia, ragù di carne, besciamella e Parmigiano Reggiano.",
                "ingredients" => "Ragu di carne macinata, besciamella, Parmigiano Reggiano, pasta sfoglia, pomodoro, cipolla, sedano, carota",
                "is_visible" => true,
                "restaurant_id" => 6

            ],
            [
                "name" => "Bistecca alla Fiorentina",
                "img" => "https://shop.agricolasangiobbe.it/wp-content/uploads/2019/06/Ricetta-Fiorentina.jpg",
                "price" => 25.00,
                "description" => "Un taglio pregiato di carne di manzo cotto alla brace, tipico della Toscana.",
                "ingredients" => "Bistecca di manzo Chianina, sale grosso, pepe nero, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 5

            ],
            [
                "name" => "Tiramisù",
                "img" => "https://www.cucina-naturale.it/wp-content/uploads/2016/11/tiramisu.jpg",
                "price" => 8.00,
                "description" => "Un dolce classico italiano a base di savoiardi, caffè, mascarpone, cacao amaro e uova.",
                "ingredients" => "Savoiardi, caffè, mascarpone, uova, zucchero, cacao amaro",
                "is_visible" => true,
                "restaurant_id" => 3

            ],
            [
                "name" => "Cheeseburger",
                "img" => "https://media.istockphoto.com/id/1319396810/it/foto/delizioso-hamburger-alla-griglia-isolato-su-sfondo-bianco-hamburger-fast-food-perfetto.jpg?s=612x612&w=0&k=20&c=VPje2SxpDKLngDCFlUjKtzvAy4jWdklguoyITVYYG2w=",
                "price" => 5.00,
                "description" => "Un delizioso panino con carne di manzo, formaggio fuso e salsa speciale.",
                "ingredients" => "Pane, carne di manzo, formaggio, salsa",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Crispy Mc Bacon",
                "img" => "https://www.italpress.com/wp-content/uploads/2020/09/20200904_1658.jpg",
                "price" => 6.00,
                "description" => "Un gustoso panino con bacon croccante, salsa crispy e formaggio.",
                "ingredients" => "Pane, carne di manzo, bacon, formaggio",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Piadina Crispy Chicken",
                "img" => "https://business.menew.app/dishes/59-2491-wrap-pollo-croccante-ea8aeed1-8666-4cc5-9cae-1ed7881c9757.jpeg",
                "price" => 6.50,
                "description" => "Una piadina con pollo fritto, maionese e insalata fresca.",
                "ingredients" => "Piadina, pollo, maionese, insalata",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Piadina Grilled Chicken",
                "img" => "https://business.menew.app/dishes/59-2492-wrap-di-pollo-grigliato-a8bebe8f-24e6-4bf2-81ac-1f6ea8f34e88.jpeg",
                "price" => 6.50,
                "description" => "Una piadina con pollo grigliato, maionese e insalata fresca.",
                "ingredients" => "Piadina, pollo, maionese, insalata",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Frappuccino",
                "img" => "https://globalassets.starbucks.com/digitalassets/products/bev/SBX20190528_CaramelRibbonCrunchFrappCreme.jpg?impolicy=1by1_tight_288",
                "price" => 5.00,
                "description" => "Un succoso milkshake al caramello.",
                "ingredients" => "Latte, gelato al caramello",
                "is_visible" => true,
                "restaurant_id" => 15
            ],
            [
                "name" => "Chocolate Cream Frappuccino",
                "img" => "https://globalassets.starbucks.com/digitalassets/products/bev/SBX20190528_DoubleChocolatyChipCremeFrapp.jpg?impolicy=1by1_tight_288",
                "price" => 4.50,
                "description" => "Un delizioso milkshake al cioccolato.",
                "ingredients" => "Latte, gelato al cioccolato",
                "is_visible" => true,
                "restaurant_id" => 15
            ],
            [
                "name" => "Risotto alla Milanese",
                "img" => "https://safrescobaldistatic.blob.core.windows.net/media/2022/11/RISOTTO-ALLA-MILANESE.jpg",
                "price" => 14.00,
                "description" => "Risotto tipico milanese preparato con zafferano e brodo di carne.",
                "ingredients" => "Riso Carnaroli, zafferano, brodo di carne, burro, Parmigiano Reggiano, cipolla, vino bianco",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Gnocchi al Pesto",
                "img" => "https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/A39DEDA6-3C6B-4F02-B6A2-DAD2F8639A45/Derivates/2fae282e-739a-42d2-b9d7-84bf3374e63f.jpg",
                "price" => 12.00,
                "description" => "Gnocchi di patate conditi con pesto alla genovese.",
                "ingredients" => "Gnocchi di patate, basilico, pinoli, Parmigiano Reggiano, pecorino, aglio, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Ossobuco",
                "img" => "https://blog.giallozafferano.it/cucinachetipassaoriginal/wp-content/uploads/2021/11/ossobuco-in-umido-32-scaled.jpg",
                "price" => 18.00,
                "description" => "Un piatto lombardo di ossobuco di vitello cotto lentamente in bianco.",
                "ingredients" => "Ossobuco di vitello, carota, sedano, cipolla, brodo di carne, vino bianco, burro, prezzemolo",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Arancini di Riso",
                "img" => "https://www.sicilianicreativiincucina.it/wp-content/uploads/2024/04/arancini-messinesi-2.jpg",
                "price" => 8.00,
                "description" => "Palline di riso farcite con ragù, piselli e mozzarella, fritte fino a doratura.",
                "ingredients" => "Riso, ragù di carne, piselli, mozzarella, pangrattato, uova, olio per friggere",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Polenta con Funghi",
                "img" => "https://cdn.cook.stbm.it/thumbnails/ricette/143/143493/hd750x421.jpg  ",
                "price" => 10.00,
                "description" => "Polenta morbida accompagnata da un sugo di funghi misti.",
                "ingredients" => "Farina di mais, funghi misti, aglio, prezzemolo, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Melanzane alla Parmigiana",
                "img" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2010/03/ricetta-parmigiana-melanzane/_jcr_content/header-par/image_single.img.jpg/1592993216714.jpg",
                "price" => 13.00,
                "description" => "Strati di melanzane fritte, mozzarella, Parmigiano e salsa di pomodoro cotti al forno.",
                "ingredients" => "Melanzane, mozzarella, Parmigiano Reggiano, salsa di pomodoro, basilico, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Frittura di Calamari",
                "img" => "https://www.giallozafferano.it/images/153-15363/Frittura-di-calamari_780x520_wm.jpg",
                "price" => 16.00,
                "description" => "Anelli di calamari fritti in pastella, croccanti e saporiti.",
                "ingredients" => "Calamari, farina, olio per friggere, limone, sale",
                "is_visible" => true,
                "restaurant_id" => 2
            ],
            [
                "name" => "Ravioli di Ricotta e Spinaci",
                "img" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/02/AdobeStock_227238772.jpeg",
                "price" => 14.00,
                "description" => "Pasta ripiena di ricotta e spinaci, condita con burro e salvia.",
                "ingredients" => "Farina, uova, ricotta, spinaci, burro, salvia, Parmigiano Reggiano",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Pizza Quattro Stagioni",
                "img" => "https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2016/07/3017_Pizza.jpg?resize=895%2C616&ssl=1",
                "price" => 12.00,
                "description" => "Pizza divisa in quattro parti, ognuna con ingredienti diversi rappresentanti le stagioni.",
                "ingredients" => "Pomodoro, mozzarella, funghi, prosciutto cotto, carciofi, olive, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Torta Caprese",
                "img" => "https://www.ioscelgoveg.it/wp-content/uploads/2020/04/Torta-caprese-vegan-ioscelgoveg_Essere-Animali-scaled-e1587032729605.jpg",
                "price" => 7.00,
                "description" => "Dolce al cioccolato e mandorle, tipico dell'isola di Capri.",
                "ingredients" => "Cioccolato fondente, mandorle, burro, zucchero, uova, zucchero a velo",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Bruschetta al Pomodoro",
                "img" => "https://primochef.it/wp-content/uploads/2019/09/SH_bruschetta_al_pomodoro-1200x800.jpg.webp",
                "price" => 6.00,
                "description" => "Fette di pane tostato condite con pomodoro fresco, aglio, basilico e olio d'oliva.",
                "ingredients" => "Pane, pomodori, aglio, basilico, olio extravergine d'oliva, sale",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Tagliata di Manzo",
                "img" => "https://www.melarossa.it/wp-content/uploads/2023/10/tagliata-di-manzo.jpg",
                "price" => 22.00,
                "description" => "Fette di manzo cotte alla griglia, servite con rucola e scaglie di Parmigiano.",
                "ingredients" => "Manzo, rucola, Parmigiano Reggiano, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 5
            ],
            [
                "name" => "Panna Cotta",
                "img" => "https://static01.nyt.com/images/2023/08/10/multimedia/LH-Panna-Cotta-wczm/LH-Panna-Cotta-wczm-superJumbo.jpg",
                "price" => 6.00,
                "description" => "Dolce al cucchiaio a base di panna, zucchero e gelatina, servito con salsa ai frutti di bosco.",
                "ingredients" => "Panna, zucchero, gelatina, vaniglia, salsa ai frutti di bosco",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Insalata Caprese",
                "img" => "https://www.cuocicuoci.com/wp-content/uploads/2022/05/caprese.jpg",
                "price" => 9.00,
                "description" => "Un'insalata fresca e leggera con pomodori, mozzarella, basilico e olio d'oliva.",
                "ingredients" => "Pomodori, mozzarella, basilico, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "Minestrone",
                "img" => "https://www.cuocicuoci.com/wp-content/uploads/2022/05/caprese.jpg",
                "price" => 8.00,
                "description" => "Zuppa di verdure miste con pasta o riso.",
                "ingredients" => "Verdure miste, pasta o riso, brodo vegetale, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "Cotoletta alla Milanese",
                "img" => "https://www.giallozafferano.it/images/265-26509/Cotoletta-alla-milanese-della-nonna_650x433_wm.jpg",
                "price" => 15.00,
                "description" => "Costoletta di vitello impanata e fritta, servita con limone.",
                "ingredients" => "Costoletta di vitello, farina, uova, pangrattato, burro, limone, sale",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Vitello Tonnato",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2wm5yJjfERMnaO2knKvD81KDX-JOQCSzmZhthbzQqaA&s",
                "price" => 14.00,
                "description" => "Fettine di vitello servite con una salsa a base di tonno, capperi e maionese.",
                "ingredients" => "Vitello, tonno, capperi, maionese, limone, acciughe, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Polpette al Sugo",
                "img" => "https://www.alimentaitaly.com/img/cms/polpette%20sugo%20LARGE.jpg",
                "price" => 10.00,
                "description" => "Polpette di carne cotte in un sugo di pomodoro.",
                "ingredients" => "Carne macinata, pane, latte, uova, parmigiano, prezzemolo, aglio, pomodoro, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Cannoli Siciliani",
                "img" => "https://www.molinocolombo.it/wp-content/uploads/2023/03/cannoli-siciliani.jpg",
                "price" => 6.00,
                "description" => "Dolce siciliano a base di cialda fritta ripiena di crema di ricotta.",
                "ingredients" => "Ricotta, zucchero, cioccolato fondente, frutta candita, cialde per cannoli",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "Risotto ai Funghi",
                "img" => "https://images.squarespace-cdn.com/content/v1/50106d5684aed4702b7242ed/1586960457052-Q6D241245NWYJQJQ34Q8/image-asset.jpeg",
                "price" => 14.00,
                "description" => "Risotto cremoso ai funghi porcini.",
                "ingredients" => "Riso Carnaroli, funghi porcini, brodo vegetale, burro, Parmigiano Reggiano, cipolla, vino bianco",
                "is_visible" => true,
                "restaurant_id" => 9
            ],
            [
                "name" => "Pesce spada alla griglia",
                "img" => "https://primochef.it/wp-content/uploads/2019/04/SH_pesce_spada_grigliato-1200x800.jpg",
                "price" => 35.00,
                "description" => "Pesce spada fresco cotto alla griglia",
                "ingredients" => "Pesce, aromi",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "branzino alla griglia",
                "img" => "https://www.braciamiancora.com/wp-content/uploads/2018/09/branzino_alla_griglia-1.jpg",
                "price" => 18.00,
                "description" => "Branzino fresco cotto alla griglia",
                "ingredients" => "Pesce, aromi",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "Zuppa di Pesce",
                "img" => "https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/e34c7ab7-d78a-4e94-bf36-4e5c7e274977/Derivates/99921d0e-90bc-4484-8443-abd7a717ce4a.jpg",
                "price" => 20.00,
                "description" => "Varietà di pesce cotta in un brodo saporito.",
                "ingredients" => "Pesce misto, pomodori, aglio, prezzemolo, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 9
            ],
            [
                "name" => "Pasta alla Norma",
                "img" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/12/ricetta-pasta-norma/_jcr_content/header-par/image_single.img.jpg/1562754500727.jpg",
                "price" => 12.00,
                "description" => "Pasta condita con salsa di pomodoro, melanzane fritte e ricotta salata.",
                "ingredients" => "Pasta, pomodori, melanzane, ricotta salata, basilico, aglio, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Hosomake Sake",
                "img" => "https://www.junsei.it/wp-content/uploads/2021/12/Hoso-Sake-600x400.jpg",
                "price" => 6.00,
                "description" => "Nigiri sushi con salmone fresco.",
                "ingredients" => "Riso, salmone, aceto di riso, zucchero, sale",
                "is_visible" => true,
                "restaurant_id" => 14
            ],
            [
                "name" => "Temaki Ebi",
                "img" => "https://sushisu.shop/wp-content/uploads/2019/08/Schermata-2019-08-08-alle-12.05.32.png",
                "price" => 10.00,
                "description" => "Temaki con gamberi fritti.",
                "ingredients" => "Riso, salmone, aceto di riso, zucchero, sale, pesce",
                "is_visible" => true,
                "restaurant_id" => 14
            ],
            [
                "name" => "Panino Classico",
                "img" => "https://www.myballoon.it/storage/media/2021/06/1834/thumbs/panini-farciti-thumb-800.jpg",
                "price" => 5.00,
                "description" => "Un panino semplice ma delizioso con prosciutto cotto e formaggio.",
                "ingredients" => "Pane, prosciutto cotto, formaggio",
                "is_visible" => true,
                "restaurant_id" => 13
            ],
            [
                "name" => "Panino Vegetariano",
                "img" => "https://www.waldkorn.it/wp-content/uploads/2020/09/panino-vegetariano-gorgonzola-noci-1024x654.jpg",
                "price" => 6.00,
                "description" => "Un panino fresco e leggero con verdure grigliate e hummus.",
                "ingredients" => "Pane, verdure grigliate, hummus",
                "is_visible" => true,
                "restaurant_id" => 13
            ],
            [
                "name" => "Panino al Pollo",
                "img" => "https://brunobarbieri.blog/wp-content/uploads/2022/04/panino-pollo-agrodolce.jpg",
                "price" => 7.00,
                "description" => "Un panino saporito con pollo grigliato, lattuga e maionese.",
                "ingredients" => "Pane, pollo grigliato, lattuga, maionese",
                "is_visible" => true,
                "restaurant_id" => 13
            ],
            [
                "name" => "Panino al Salmone",
                "img" => "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2021/06/Bagels-farciti-7934.jpg",
                "price" => 8.00,
                "description" => "Un panino gourmet con salmone affumicato, rucola e crema di formaggio.",
                "ingredients" => "Pane, salmone affumicato, rucola, crema di formaggio",
                "is_visible" => true,
                "restaurant_id" => 13
            ],
            [
                "name" => "Pizza Capricciosa",
                "img" => "https://wips.plug.it/cips/buonissimo.org/cms/2019/04/pizza-capricciosa.jpg",
                "price" => 9.50,
                "description" => "Una pizza ricca con pomodoro, mozzarella, funghi, prosciutto cotto, olive, carciofini e uovo.",
                "ingredients" => "Impasto per pizza, pomodoro, mozzarella, funghi, prosciutto cotto, olive, carciofini, uovo",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Pizza Diavola",
                "img" => "https://wips.plug.it/cips/buonissimo.org/cms/2023/02/pizza-alla-diavola.jpg",
                "price" => 8.50,
                "description" => "Una pizza piccante con pomodoro, mozzarella e salame piccante.",
                "ingredients" => "Impasto per pizza, pomodoro, mozzarella, salame piccante",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Pizza Salsiccia e Friarielli",
                "img" => "https://cdn.chefincamicia.com/images/b4591e1ef51fdd8a9a8e7e7659c1a702.1920.jpg",
                "price" => 9.50,
                "description" => "Una pizza tipica napoletana con salsiccia e friarielli.",
                "ingredients" => "Impasto per pizza, salsiccia, friarielli",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Filetto di Wagyu (A5)",
                "img" => "https://mikeleerose.com/wp-content/uploads/fette-di-wagyu.jpeg",
                "price" => 50.00,
                "description" => "Filetto di carne pregiata Wagyu Giapponese",
                "ingredients" => "Carne di manzo, olio, sale",
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
