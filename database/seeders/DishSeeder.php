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

            ],
            [
                "name" => "Risotto alla Milanese",
                "img" => "https://www.lacucinaitaliana.it/content/uploads/2018/10/31111448/risotto-alla-milanese-796x512.jpg",
                "price" => 14.00,
                "description" => "Risotto tipico milanese preparato con zafferano e brodo di carne.",
                "ingredients" => "Riso Carnaroli, zafferano, brodo di carne, burro, Parmigiano Reggiano, cipolla, vino bianco",
                "is_visible" => true,
                "restaurant_id" => 6
            ],
            [
                "name" => "Gnocchi al Pesto",
                "img" => "https://primochef.it/wp-content/uploads/2020/05/SH_gnocchi_pesto.jpg",
                "price" => 12.00,
                "description" => "Gnocchi di patate conditi con pesto alla genovese.",
                "ingredients" => "Gnocchi di patate, basilico, pinoli, Parmigiano Reggiano, pecorino, aglio, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 7
            ],
            [
                "name" => "Ossobuco",
                "img" => "https://www.salepepe.it/files/2016/04/ossobuco-alla-milanese.jpg",
                "price" => 18.00,
                "description" => "Un piatto lombardo di ossobuco di vitello cotto lentamente in bianco.",
                "ingredients" => "Ossobuco di vitello, carota, sedano, cipolla, brodo di carne, vino bianco, burro, prezzemolo",
                "is_visible" => true,
                "restaurant_id" => 8
            ],
            [
                "name" => "Arancini di Riso",
                "img" => "https://primochef.it/wp-content/uploads/2019/05/SH_arancini_di_riso.jpg",
                "price" => 8.00,
                "description" => "Palline di riso farcite con ragù, piselli e mozzarella, fritte fino a doratura.",
                "ingredients" => "Riso, ragù di carne, piselli, mozzarella, pangrattato, uova, olio per friggere",
                "is_visible" => true,
                "restaurant_id" => 9
            ],
            [
                "name" => "Polenta con Funghi",
                "img" => "https://www.ricettealvolo.it/wp-content/uploads/2020/01/Polenta-e-funghi.jpg",
                "price" => 10.00,
                "description" => "Polenta morbida accompagnata da un sugo di funghi misti.",
                "ingredients" => "Farina di mais, funghi misti, aglio, prezzemolo, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 10
            ],
            [
                "name" => "Melanzane alla Parmigiana",
                "img" => "https://www.giallozafferano.it/images/168-16869/Melanzane-alla-Parmigiana_780x520_wm.jpg",
                "price" => 13.00,
                "description" => "Strati di melanzane fritte, mozzarella, Parmigiano e salsa di pomodoro cotti al forno.",
                "ingredients" => "Melanzane, mozzarella, Parmigiano Reggiano, salsa di pomodoro, basilico, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 11
            ],
            [
                "name" => "Frittura di Calamari",
                "img" => "https://www.lacucinaitaliana.it/content/uploads/2020/07/31211442/frittura-di-calamari-960x540.jpg",
                "price" => 16.00,
                "description" => "Anelli di calamari fritti in pastella, croccanti e saporiti.",
                "ingredients" => "Calamari, farina, olio per friggere, limone, sale",
                "is_visible" => true,
                "restaurant_id" => 12
            ],
            [
                "name" => "Ravioli di Ricotta e Spinaci",
                "img" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2017/01/ravioli-di-ricotta-e-spinaci/jcr:content/header-par/image_single.img.jpg/1548879021405.jpg",
                "price" => 14.00,
                "description" => "Pasta ripiena di ricotta e spinaci, condita con burro e salvia.",
                "ingredients" => "Farina, uova, ricotta, spinaci, burro, salvia, Parmigiano Reggiano",
                "is_visible" => true,
                "restaurant_id" => 13
            ],
            [
                "name" => "Pizza Quattro Stagioni",
                "img" => "https://www.ilgiornaledelcibo.it/wp-content/uploads/2021/10/pizza-quattro-stagioni.jpg",
                "price" => 12.00,
                "description" => "Pizza divisa in quattro parti, ognuna con ingredienti diversi rappresentanti le stagioni.",
                "ingredients" => "Pomodoro, mozzarella, funghi, prosciutto cotto, carciofi, olive, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 14
            ],
            [
                "name" => "Torta Caprese",
                "img" => "https://www.salepepe.it/files/2014/04/torta-caprese-al-cioccolato-e-mandorle.jpg",
                "price" => 7.00,
                "description" => "Dolce al cioccolato e mandorle, tipico dell'isola di Capri.",
                "ingredients" => "Cioccolato fondente, mandorle, burro, zucchero, uova, zucchero a velo",
                "is_visible" => true,
                "restaurant_id" => 15
            ],
            [
                "name" => "Bruschetta al Pomodoro",
                "img" => "https://www.lacucinaitaliana.it/content/uploads/2021/07/Bruschetta-al-pomodoro.jpg",
                "price" => 6.00,
                "description" => "Fette di pane tostato condite con pomodoro fresco, aglio, basilico e olio d'oliva.",
                "ingredients" => "Pane, pomodori, aglio, basilico, olio extravergine d'oliva, sale",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Tagliata di Manzo",
                "img" => "https://www.salepepe.it/files/2018/07/tagliata-di-manzo.jpg",
                "price" => 22.00,
                "description" => "Fette di manzo cotte alla griglia, servite con rucola e scaglie di Parmigiano.",
                "ingredients" => "Manzo, rucola, Parmigiano Reggiano, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 2
            ],
            [
                "name" => "Panna Cotta",
                "img" => "https://www.giallozafferano.it/images/233-23327/Panna-cotta_450x300.jpg",
                "price" => 6.00,
                "description" => "Dolce al cucchiaio a base di panna, zucchero e gelatina, servito con salsa ai frutti di bosco.",
                "ingredients" => "Panna, zucchero, gelatina, vaniglia, salsa ai frutti di bosco",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Insalata Caprese",
                "img" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2010/03/ricetta-insalata-caprese/jcr:content/header-par/image_single.img.jpg/1524759346415.jpg",
                "price" => 9.00,
                "description" => "Un'insalata fresca e leggera con pomodori, mozzarella, basilico e olio d'oliva.",
                "ingredients" => "Pomodori, mozzarella, basilico, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Minestrone",
                "img" => "https://www.ilgiornaledelcibo.it/wp-content/uploads/2018/11/minestrone.jpg",
                "price" => 8.00,
                "description" => "Zuppa di verdure miste con pasta o riso.",
                "ingredients" => "Verdure miste, pasta o riso, brodo vegetale, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 5
            ],
            [
                "name" => "Cotoletta alla Milanese",
                "img" => "https://www.giallozafferano.it/images/168-16820/Cotoletta-alla-Milanese_450x300.jpg",
                "price" => 15.00,
                "description" => "Costoletta di vitello impanata e fritta, servita con limone.",
                "ingredients" => "Costoletta di vitello, farina, uova, pangrattato, burro, limone, sale",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Vitello Tonnato",
                "img" => "https://www.salepepe.it/files/2015/05/vitello-tonnato.jpg",
                "price" => 14.00,
                "description" => "Fettine di vitello servite con una salsa a base di tonno, capperi e maionese.",
                "ingredients" => "Vitello, tonno, capperi, maionese, limone, acciughe, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 2
            ],
            [
                "name" => "Polpette al Sugo",
                "img" => "https://primochef.it/wp-content/uploads/2018/03/SH_polpette_al_sugo-1200x800.jpg",
                "price" => 10.00,
                "description" => "Polpette di carne cotte in un sugo di pomodoro.",
                "ingredients" => "Carne macinata, pane, latte, uova, parmigiano, prezzemolo, aglio, pomodoro, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 3
            ],
            [
                "name" => "Cannoli Siciliani",
                "img" => "https://www.giallozafferano.it/images/ricette/137/13742/foto_hd/hd650x433_wm.jpg",
                "price" => 6.00,
                "description" => "Dolce siciliano a base di cialda fritta ripiena di crema di ricotta.",
                "ingredients" => "Ricotta, zucchero, cioccolato fondente, frutta candita, cialde per cannoli",
                "is_visible" => true,
                "restaurant_id" => 4
            ],
            [
                "name" => "Risotto ai Funghi",
                "img" => "https://www.giallozafferano.it/images/237-23760/Risotto-ai-funghi_780x520_wm.jpg",
                "price" => 14.00,
                "description" => "Risotto cremoso ai funghi porcini.",
                "ingredients" => "Riso Carnaroli, funghi porcini, brodo vegetale, burro, Parmigiano Reggiano, cipolla, vino bianco",
                "is_visible" => true,
                "restaurant_id" => 5
            ],
            [
                "name" => "Zuppa di Pesce",
                "img" => "https://www.lacucinaitaliana.it/content/uploads/2018/10/31113542/zuppa-di-pesce.jpg",
                "price" => 20.00,
                "description" => "Varietà di pesce cotta in un brodo saporito.",
                "ingredients" => "Pesce misto, pomodori, aglio, prezzemolo, olio extravergine d'oliva, sale, pepe",
                "is_visible" => true,
                "restaurant_id" => 1
            ],
            [
                "name" => "Pasta alla Norma",
                "img" => "https://www.giallozafferano.it/images/168-16819/Pasta-alla-Norma_450x300.jpg",
                "price" => 12.00,
                "description" => "Pasta condita con salsa di pomodoro, melanzane fritte e ricotta salata.",
                "ingredients" => "Pasta, pomodori, melanzane, ricotta salata, basilico, aglio, olio extravergine d'oliva",
                "is_visible" => true,
                "restaurant_id" => 2
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
