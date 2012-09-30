<?php
class MealTest extends PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        
    }
    public function testSave()
    {
        $meal = new Meal();
        $meal->id = 1;
        $meal->name = 'beef';
        $meal->description = 'beef with potat';
        $meal->price = 20.00;
        $meal->save();

        $mealFound = Meal::find(1);
        $this->assertEquals($meal->name, $mealFound->name);
        $this->assertEquals($meal->description, $mealFound->description);
        $this->assertEquals($meal->price, $mealFound->price);
        $meal->delete();
    }
}

