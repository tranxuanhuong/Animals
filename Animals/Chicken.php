<?php
include_once (dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once (dirname(__FILE__) . '/../InterfaceClass/Edible.php');


class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        return "Chip chip";
    }
    public function howtoEat()
    {
       return "Mo thoc";
    }
}