<?php
class AddressTest extends PHPUnit_Framework_TestCase
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

        $customer2 = new Customer();
        $customer->find(1);
        $addresses = $customer->addresses()->get();
        foreach ($addresses as $adr) {
            echo $adr->address;
        }
        $address->delete();
        $address2->delete();
        $customer->delete();
        $customer2->delete();
    }
}


