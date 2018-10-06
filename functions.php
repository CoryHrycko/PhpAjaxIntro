<?php
//functions

//formate functions--
//Camel Case
//underscores
//pascalcase - all caps of sections

function simpleFunction(){
    echo 'Hello World';
}

//calls functions
simpleFunction();

//funcs with param
function sayHello($name){
    echo "<br>Hello $name";
}
sayHello('Claire');
sayHello('Bob');

//sayHello(); throws argument error

//below is the default fix
function sayHello2($name = 'World'){
    echo "<br>Hello $name<br><br>";
}

sayHello2();
sayHello2('Time');

function addNumbers($num1,$num2){
    echo $num1 + $num2;
    return $num1 + $num2;
}

addNumbers(4,5);


$myNum = 10;

function addFive($num3){
    $num3 +=5;
}

function addTen(&$num3){
    $num3 +=10;
}

addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";
