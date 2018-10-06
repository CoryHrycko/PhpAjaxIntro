<?php
echo date('d');// day
echo '/';
echo date('m');// month
echo '/';
echo date('y');// year
echo '/';
echo date('l');// day of week
echo '<BR> <br>';
echo date('y/m/d');// europe
echo '<BR> <br>';
echo date('m-d-y');// america
echo '<BR> <br>';
echo date('h');// hour
echo '/';
echo date('i');// minute
echo '/';
echo date('a');// am pm
echo '<BR> <br>';
echo date('h:i:sa');// clock utc
echo '<BR> <br>';
// set time zone
date_default_timezone_set('America/New_York');
echo date('h:i:sa');// clock utc
echo '<BR> <br>';

$timestamp = mktime(10,12,54,9,10,1981);
echo $timestamp;
echo "<br> <br>";

echo date('m/d/Y h:i:sa', $timestamp);
echo '<br><br><br>';
$timestamp2 = strtotime('7:00pm March 22 2016');
echo $timestamp2;
echo '<br><br>';
echo date('m/d/Y h:i:sa', $timestamp2);
echo '<br> <br>';
$timestamp3 = strtotime("tomorrow");
echo '<br> <br>';
$timestamp4 = strtotime('next sunday');
echo '<br> <br>';
echo date('m/d/Y h:i:sa', $timestamp3);
echo '<br> <br>';
echo date('m/d/Y h:i:sa', $timestamp4);
echo '<br> <br>';
echo '<br> <br>';
//good stuff 