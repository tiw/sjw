<?php
class Order extends Eloquent
{
    public function customer()
    {
        return $this->belongs_to('Customer');
    }

    public function meals()
    {
        return $this->has_many_and_belongs_to('Meal');
    }
}

