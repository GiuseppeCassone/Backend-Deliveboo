<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function OrderStats(){
        $userId = Auth::id();

        $restaurants = Restaurant::where('user_id', $userId)->pluck('id');

        if($restaurants->isEmpty()){
            abort(401, 'Siamo spiacenti');
        }

        $orderStats = Order::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as order_count'),
            DB::raw('SUM(order_total) as order_total'),

        )
        ->whereHas('dishes', function($query) use ($restaurants){

            $query->whereIn('restaurant_id', $restaurants);
        })
        ->groupBy('year', 'month')
        ->orderBy('month', 'desc')
        ->orderBy('year', 'desc')
        ->get();

        return response()->json($orderStats);

        // return view('admin.orders.statistics.index');
        
    }

    public function ShowStats(){
        
        return view('admin.orders.statistics.index');
    }
}
