@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($orders as $order)
                <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->customer_lastname}}</td>
                <td>{{$order->customer_email}}</td>
                <td>{{$order->customer_address}}</td>
                <td>{{$order->customer_phone}}</td>
                <td>{{$order->order_total}}€</td>
                </tr>
                <!-- <tr> -->
                <!-- <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr> -->
                @endforeach
            </tbody>
        </table>
            
           
    
</div>
    



@endsection