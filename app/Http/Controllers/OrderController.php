<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();

    // Trova i ristoranti di proprietà dell'utente autenticato
    $restaurants = Restaurant::where('user_id', $userId)->pluck('id');
    
    // Controlla se l'utente possiede almeno un ristorante
    if ($restaurants->isEmpty()) {
        abort(401); // Non autorizzato
    }

    // Recupera gli ordini relativi ai piatti dei ristoranti dell'utente autenticato
    $orders = Order::whereHas('dishes', function ($query) use ($restaurants) {
        $query->whereIn('restaurant_id', $restaurants);
    })->with('dishes')->orderBy('created_at')->get();
    
    // Restituisce la vista degli ordini
    return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
