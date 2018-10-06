<?php
//People Arrat @TODO - Get from DB

$people[] = 'Vanna Volk';
$people[] = 'Vinita Rielly';
$people[] = 'Cyrus Marinello';
$people[] = 'Clarinda Cheeks';
$people[] = 'Harriet Reasor';
$people[] = 'Ebony Sclafani';
$people[] = 'Rebekah Kogut';
$people[] = 'Illa Zehner';
$people[] = 'Latoyia Sharrow';
$people[] = 'Kisha Forbis';
$people[] = 'Bud Marple';
$people[] = 'Arnette Heyne';
$people[] = 'Brandee Menter';
$people[] = 'Alpha Donofrio';
$people[] = 'Shanelle Stockton';
$people[] = 'Lisandra Saiki';
$people[] = 'Clifton Mcglynn';
$people[] = 'vvAugust Cazarez';
$people[] = 'Kyle Durgin';
$people[] = 'Emile Morel';
$people[] = 'Tianna Fearon';
$people[] = 'Erick Cardamone';
$people[] = 'Domonique Cudd';
$people[] = 'Edna Comacho';
$people[] = 'Eloy Mackey';
$people[] = 'Rena Kawakami';
$people[] = 'Derek Bou';
$people[] = 'Berta Flemister';
$people[] = 'Freeda Parra';
$people[] = 'Selma Vesey';
$people[] = 'Chan Deshaies';
$people[] = 'Ola Gracie';
$people[] = 'Vicky Higginbotham';
$people[] = 'Gerry Holmquist';
$people[] = 'Cassidy Montealegre';
$people[] = 'Marc Wester';
$people[] = 'Claudio Wilbur';
$people[] = 'Antonietta Wait';
$people[] = 'Merna Resendiz';
$people[] = 'Silva Kinsley';
$people[] = 'Bree Rumore';
$people[] = 'Hai Kinnan';
$people[] = 'Katelin Martens';
$people[] = 'Keith Merck';
$people[] = 'Norberto Cardello';
$people[] = 'Lizzette Farrish';
$people[] = 'Franklin Bonney';
$people[] = 'Jessi Widmer';
$people[] = 'Rocio Bumgarner';
$people[] = 'Cornelius Rehm';

//get Query String

$q =$_REQUEST['q'];

$suggestion= "";

//Get suggestion

if($q !==""){
    //switches all to lowercase
    $q =strtolower($q);
    //grabs a the length so the loop has something to run on
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person,0, $len))){
            if($suggestion ===""){
                $suggestion = $person;
            }else{
                $suggestion.=", $person";
            }

        }
    }
}
//turnerary for if/else statement
echo $suggestion ===""?"No Suggestion" : $suggestion;