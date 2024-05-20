<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request){
        
        $query = Restaurant::with('typologies');

        // $types = request('typologies');

        if($request->has('typologies')) {

            $types = $request->input('typologies');

            $typesArray = explode(',', $types);
            if($typesArray){
                $query->whereHas('typologies', function ($query) use ($typesArray){
                    $query->whereIn('type', $typesArray);
                });
                
            }
        }       

        $restaurants = $query->get();
        // con get() li prendo tutti, nel caso dovessi mettere una paginazione al posto del get() ci andrà paginate();
        
        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }

    public function show($id){
        $restaurant = Restaurant::with('typologies')->where('id', '=', $id)->first();

        return response()->json([
            'success' => true,
            'results' => $restaurant
        ]);
    }
}

