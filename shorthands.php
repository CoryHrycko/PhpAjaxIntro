<?php
$loggedin = true;
$array= [2,3,4,1,2,3];


if($loggedin){
    echo 'you are logged in';
}else{
    echo 'you are NOT logged in';
}



//echo ($loggedin) ? 'true' : 'not true';
echo ($loggedin) ? 'you are logged in' : 'you are NOT logged in';
echo '<br><br><br>';
$isRedistered=($loggedin == true) ? true : false;

$age = 20;
$score = 15;

echo 'Your score is: '.($score>10?($age>10?'Average': 'exceptional'):($age>10 ? 'Horrible':'Average'));

?>



<div>
<?php if($loggedin) { ?>
    <h1>Welcome User</h1>
<?php }   else {    ?>
    <h1>Welcome Guest</h1>
<?php } ?>
</div>

<div>
<?php if($loggedin): ?>
    <H1>Welcome User</H1>
<?php else: ?>
    <H1>Welcome Guest</H1>
<?php endif; ?>
</div>



<div>
<?php for ($i=0;$i<10;$i++): ?>
    <li><?php echo $i;?></li>
<?php endfor; ?>
</div>
