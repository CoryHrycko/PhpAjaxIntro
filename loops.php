<?php
//LOOPERS 

//For, While, Do/while, FOREACH

//For
//params - init, contition, inc/dec


for($i=0;$i<10;$i++){
    echo 'Number '.$i;
    echo '<br>';
};


//while loop
//param - condition

$i=0;
while($i<10){
    echo $i;
    echo '<br>';
    $i++;
};

//dowhile

//param- condition

$i=0;
do{
    echo $i;
    echo'<br';
    $i++;
}
while($i<10);

//foreach

//meant to use with arrays

$people = array('b','c','f'); //simple array

foreach($people as $person){
    echo $person;
    echo '<br>';
};
$people = array('b'=>3,'c'=>2,'f'=>1); //simple array

foreach($people as $person => $id){
    echo $person.': '.$id;
    echo '<br>';
};
