<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_name' => 'John',
                'customer_lastname' => 'Doe',
                'customer_email' => 'john.doe@example.com',
                'customer_address' => '123 Main St, Springfield',
                'customer_phone' => '1234567890',
                'order_total' => 29.99,
                'created_at'=> '2023-12-20 13:12:00'
            ],
            [
                'customer_name' => 'Jane',
                'customer_lastname' => 'Smith',
                'customer_email' => 'jane.smith@example.com',
                'customer_address' => '456 Elm St, Springfield',
                'customer_phone' => '0987654321',
                'order_total' => 45.50,
                'created_at'=> '2023-11-20 12:12:00'

            ],
            [
                'customer_name' => 'Bob',
                'customer_lastname' => 'Johnson',
                'customer_email' => 'bob.johnson@example.com',
                'customer_address' => '789 Oak St, Springfield',
                'customer_phone' => '1122334455',
                'order_total' => 32.75,
                'created_at'=> '2023-10-20 11:12:00'
                
            ],
            [
                'customer_name' => 'Alice',
                'customer_lastname' => 'Williams',
                'customer_email' => 'alice.williams@example.com',
                'customer_address' => '321 Pine St, Springfield',
                'customer_phone' => '2233445566',
                'order_total' => 27.80,
                'created_at'=> '2023-09-20 10:12:00'

            ],
            [
                'customer_name' => 'Charlie',
                'customer_lastname' => 'Brown',
                'customer_email' => 'charlie.brown@example.com',
                'customer_address' => '654 Cedar St, Springfield',
                'customer_phone' => '3344556677',
                'order_total' => 58.90,
                'created_at'=> '2023-08-20 09:12:00'

            ],
        ];

        foreach($orders as $order) {

            $newOrder = new Order();

            $newOrder->customer_name = $order['customer_name'];
            $newOrder->customer_lastname = $order['customer_lastname'];
            $newOrder->customer_email = $order['customer_email'];
            $newOrder->customer_address = $order['customer_address'];
            $newOrder->customer_phone = $order['customer_phone'];
            $newOrder->order_total = $order['order_total'];
            $newOrder->created_at = $order['created_at'];

            $newOrder->save();

        }
    }
}
