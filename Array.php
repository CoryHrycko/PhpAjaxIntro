<?php
//Arrays

//Indexed

$people = array('John', 'Joe', 'fred');
$id = array(23,45,32);
$cars = ['honda','Tesla','Jag'];
$cars[3] = 'chevy';
$cars[] = 'BMW';

//count($cars); //how many are in the array
//print_r($cars); //everything in an array and how many chars
//var_dump($cars); // everything + data type

//--------------------

//Associative array
// Key => item
$people = array('Brad'=>35, 'kurt' => 32, 'Joe'=>37);

$ids = [22=>'Doj', 44 => 'kyle', 63=> 'gui'];
//echo $ids[22];

//var_dump($ids);

//multidimensional 

$cars = array(
    array(
        'Honda', 20, 10
    ),
    array(
        'Tesla', 20, 20
    ),
    array(
        'Ford', 50, 10
    ),
);

echo $cars[1][2];