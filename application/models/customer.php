<?php
class Customer extends Eloquent
{
    public function addresses()
    {
        return $this->has_many('Address');
    }


    public function orders()
    {
        return $this->has_many('Order');
    }
}

