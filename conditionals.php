<?php   
//Conditionals
// == uses parser
// === exact all the way down to data
//<,>,<=,>=,!=,!==

$num4 =5;

if($num4 == 5){
    echo '5 passed <br>';
}

$num5 ='5';

if($num5 == 5){
    echo '5 passed <br>';
}

$num6 ='5';

if($num6 === 5){
    echo '5 passed <br>';
}
else {
    echo 'Not passed <br>';
}

$num7 ='5';

if($num7 === '5'){
    echo '5 passed <br>';
}
else {
    echo 'Not passed <br>';
}

$num8 =6;

if($num8 < 5){
    echo '5 passed <br>';
}
else {
    echo 'Not passed <br>';
}

$num9 =6;

if($num9 > 5){
    echo '5 passed <br>';
}
else {
    echo 'Not passed <br>';
}

$num10 =6;

if($num10 != 5){
    echo '5 passed <br>';
}
else {
    echo 'Not passed <br>';
}

$num11 =6;

if($num11 == 5){
    echo '5 passed <br>';
}
elseif ($num11==6) {
    echo 'go for gold! <br>';
}
else {
    echo 'Not passed <br><br><br>';
}


//nesting if

$num = 9;

if($num >4){
    if($num < 10){
        echo "$num passed <br> <br>";
    }
}

//Logical operators
//and && , or || , xor

if($num > 4 && $num < 10 ){
    echo "$num + 4 passed <br> <br>";
}

if($num > 4 || $num < 10 ){
    echo "$num + 4 passed";
}


if($num > 4 XOR $num < 10 ){
    echo "$num + 4 passed";
}

//switch like every other normal switch with the stubborn ;
