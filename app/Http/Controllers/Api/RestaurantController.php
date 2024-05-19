<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        
        $query = Restaurant::with('typologies');

        // $types = request('typologies');

        // $typesArray = explode(',', $types);

        // if ($typesArray){
        //     $query->whereHas('typologies', function($query) use ($typesArray) {
        //         $query->wherIn('type', $typesArray);
        //     });
        // }

        if (request('type')) {
            $query->whereHas('typologies', function ($query) {
                $query->where('type', request('type'));
            });
        }
        $restaurants = $query->get();
        // con get() li prendo tutti, nel caso dovessi mettere una paginazione al posto del get() ci andrà paginate();

        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }
}
