<?php
include "Animals/Chicken.php";
include "Animals/Tiger.php";

include "Fruits/Apple.php";
include "Fruits/Orrange.php";


echo "--Animal<br>";

$animals[0]=new Tiger();
$animals[1]=new Chicken();

foreach ($animals as $animal){

    echo $animal->makeSound();
    echo "<br>";

    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . '<br>';
    }

}

echo "--Fruits<br>";

$fruits[0]=new Apple();
$fruits[1]=new Orrange();

foreach ($fruits as $fruit){

    echo $fruit->howtoEat().'<br>';
}



