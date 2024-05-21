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

        $restaurants = $query->paginate(3);
        // con get() li prendo tutti, nel caso dovessi mettere una paginazione al posto del get() ci andrà paginate();
        
        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }

    public function show($id){

        $restaurant = Restaurant::with(['typologies','dishes'])->where('id', '=', $id)->first();

        // dd($restaurant);

        if($restaurant){
            return response()->json([
                "success" => true,
                "result"=> $restaurant
            ]);
        } else {
            return response()->json([
                "success" => false,
                "error" => "Project not found"
            ]);
        }
        
    }
}

// if (request('type')) {
//     $query->whereHas('typologies', function ($query) {
//         $query->where('type', request('type'));
//     });
// }