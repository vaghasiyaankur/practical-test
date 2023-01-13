<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
          ['name' => 'Ramesh', 'age' => '32', 'address' => 'Ahmedabad', 'salary' => '2000.00'],
          ['name' => 'Khilan', 'age' => '25', 'address' => 'Delhi', 'salary' => '1500.00'],
          ['name' => 'kaushik', 'age' => '23', 'address' => 'Kota', 'salary' => '2000.00'],
          [ 'name' => 'Chaitali', 'age' => '25', 'address' => 'Mumbai', 'salary' => '6500.00'],
          ['name' => 'Hardik', 'age' => '27', 'address' => 'Bhopal', 'salary' => '8500.00'],
          ['name' => 'Komal', 'age' => '22', 'address' => 'MP', 'salary' => '4500.00'],
          ['name' => 'Komal', 'age' => '24', 'address' => 'Indore', 'salary' => '10000.00'],
        ];

        foreach($customers as $c){
            $customer = new Customer();
            $customer->name =  $c['name'];
            $customer->age =  $c['age'];
            $customer->address =   $c['address'];
            $customer->salary =   $c['salary'];
            $customer->save();
        }


        $orders = [
            ['date' => '2009-10-08 00:00:00', 'customer_id' => '3', 'amount' => '3000'],
            ['date' => '2009-10-08 00:00:00', 'customer_id' => '3', 'amount' => '1500'],
            ['date' => '2009-11-20 00:00:00', 'customer_id' => '2', 'amount' => '1560'],
            ['date' => '2008-05-20 00:00:00', 'customer_id' => '4', 'amount' => '2060'],
        ];

        foreach($orders as $o){
            $order = new Order();
            $order->date =  $o['date'];
            $order->customer_id =   $o['customer_id'];
            $order->amount =   $o['amount'];
            $order->save();
        }
    }
}
