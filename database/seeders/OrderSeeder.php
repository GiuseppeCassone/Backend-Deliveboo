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
                'created_at'=> '2023-08-20 13:12:00'
            ],
            [
                'customer_name' => 'Jane',
                'customer_lastname' => 'Smith',
                'customer_email' => 'jane.smith@example.com',
                'customer_address' => '456 Elm St, Springfield',
                'customer_phone' => '0987654321',
                'order_total' => 45.50,
                'created_at'=> '2023-09-20 12:12:00'

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
                'created_at'=> '2023-11-20 10:12:00'

            ],
            [
                'customer_name' => 'Charlie',
                'customer_lastname' => 'Brown',
                'customer_email' => 'charlie.brown@example.com',
                'customer_address' => '654 Cedar St, Springfield',
                'customer_phone' => '3344556677',
                'order_total' => 58.90,
                'created_at'=> '2023-12-20 09:12:00'

            ],
            [
                'customer_name' => 'Charlie',
                'customer_lastname' => 'Brown',
                'customer_email' => 'charlie.brown@example.com',
                'customer_address' => '654 Cedar St, Springfield',
                'customer_phone' => '3344556677',
                'order_total' => 58.90,
                'created_at' => '2023-12-20 13:12:00'
            ],
            [
                'customer_name' => 'Lucy',
                'customer_lastname' => 'Van Pelt',
                'customer_email' => 'lucy.vanpelt@example.com',
                'customer_address' => '321 Oak St, Springfield',
                'customer_phone' => '1231231234',
                'order_total' => 34.50,
                'created_at' => '2024-01-01 10:00:00'
            ],
            [
                'customer_name' => 'Linus',
                'customer_lastname' => 'Van Pelt',
                'customer_email' => 'linus.vanpelt@example.com',
                'customer_address' => '456 Birch St, Springfield',
                'customer_phone' => '4564564567',
                'order_total' => 23.75,
                'created_at' => '2024-01-15 11:30:00'
            ],
            [
                'customer_name' => 'Sally',
                'customer_lastname' => 'Brown',
                'customer_email' => 'sally.brown@example.com',
                'customer_address' => '789 Pine St, Springfield',
                'customer_phone' => '7897897890',
                'order_total' => 45.60,
                'created_at' => '2024-02-01 12:45:00'
            ],
            [
                'customer_name' => 'Schroeder',
                'customer_lastname' => '',
                'customer_email' => 'schroeder@example.com',
                'customer_address' => '123 Maple St, Springfield',
                'customer_phone' => '9879879870',
                'order_total' => 67.80,
                'created_at' => '2024-02-15 14:00:00'
            ],
            [
                'customer_name' => 'Peppermint',
                'customer_lastname' => 'Patty',
                'customer_email' => 'peppermint.patty@example.com',
                'customer_address' => '321 Walnut St, Springfield',
                'customer_phone' => '6546546543',
                'order_total' => 29.99,
                'created_at' => '2024-03-01 15:15:00'
            ],
            [
                'customer_name' => 'Marcie',
                'customer_lastname' => 'Malligan',
                'customer_email' => 'marcie@example.com',
                'customer_address' => '456 Chestnut St, Springfield',
                'customer_phone' => '3213213210',
                'order_total' => 39.99,
                'created_at' => '2024-03-15 16:30:00'
            ],
            [
                'customer_name' => 'Pigpen',
                'customer_lastname' => 'Oreon',
                'customer_email' => 'pigpen@example.com',
                'customer_address' => '789 Spruce St, Springfield',
                'customer_phone' => '1239876543',
                'order_total' => 19.99,
                'created_at' => '2024-04-01 17:45:00'
            ],
            [
                'customer_name' => 'Franklin',
                'customer_lastname' => 'Sputnick',
                'customer_email' => 'franklin@example.com',
                'customer_address' => '123 Elm St, Springfield',
                'customer_phone' => '9871234560',
                'order_total' => 89.99,
                'created_at' => '2024-04-15 19:00:00'
            ],
            [
                'customer_name' => 'Woodstock',
                'customer_lastname' => 'Flowers',
                'customer_email' => 'woodstock@example.com',
                'customer_address' => '321 Fir St, Springfield',
                'customer_phone' => '6549873210',
                'order_total' => 15.99,
                'created_at' => '2024-05-01 20:30:00'
            ],
            [
                'customer_name' => 'Snoopy',
                'customer_lastname' => 'Doggy',
                'customer_email' => 'snoopy@example.com',
                'customer_address' => '456 Poplar St, Springfield',
                'customer_phone' => '3216549870',
                'order_total' => 99.99,
                'created_at' => '2024-05-15 22:00:00'
            ]

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
