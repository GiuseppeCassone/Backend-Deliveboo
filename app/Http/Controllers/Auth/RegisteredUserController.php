<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Typology;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $typologies = Typology::all();

        return view('auth.register', compact('typologies'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

    //     $data = $request->all();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'restaurant_name' => ['required', 'string', 'max:200'],
            'img' => ['nullable', 'max:5000'],
            'description' => ['nullable', 'string', 'max:5000'],
            'address' => ['required', 'string'],
            'vat' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            // 'typology' => ['required']
        ],
        [
            'name.required' => 'Inserisci Titolo!!',
            'name.max' => "Puoi usare al massimo :max caratteri",
            'img.max' => "Puoi usare al massimo :max caratteri",
            'description.max' => "Puoi usare al massimo :max caratteri",
            'address.required' => 'Inserisci un indirizzo valido',
            'vat.required' => 'Inserisci un numero valido',
            'phone_number.required' => 'Inserisci un numero di telefono valido',
            // 'typology.required' => 'la tipologia deve essere inserita'
        ]
    );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'name' =>$request->restaurant_name,
            'img' => $request->img,
            'description' => $request->description,
            'address' => $request->address,
            'vat' => $request->vat,
            'phone_number' => $request->phone_number
        ]);

        // if (Arr::exists($data, "typology")) $restaurant->typologies()->attach($data["typology"]);



        // $restaurant->save();

        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
