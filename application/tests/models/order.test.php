<?php
class OrderTest extends PHPUnit_Framework_TestCase
{
    public function testSave()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->handy = '13910783948';
        $customer->save();

        $address =  new Address();
        $address->id = 1;
        $address->customer_id = 1;
        $address->address = "dongzhimeng";
        $address->save();

        $address2 = new Address();
        $address2->id = 2;
        $address2->customer_id = 1;
        $address2->address = "foshan";
        $address2->save();


        
        $meal = new Meal();
        $meal->name = 'beef';
        $meal->description = 'beef with potat';
        $meal->price = 20.00;

        $meal2 = new Meal();
        $meal2->name = 'chicken';
        $meal2->description = 'beef with potat';
        $meal2->price = 10.00;

        $order = new Order();
        $order->eta = '9:00';
        $order->payment_method = 'cash';
        $customer->orders()->insert($order);
        $order->meals()->insert($meal);
        $order->meals()->insert($meal2);



        $mealsArray = Order::find(0)->meals()->get();
        foreach ($mealsArray as $m) {
            $m->delete();
        }

        $address->delete();
        $address2->delete();
        $order->delete();
        $customer->delete();
    }
}
