<?php
$user = ['name' => 'Brad', 'email' => 'test@test.com',
'age' => 35];
//serializing the array so it can be cookied
$user = serialize($user);

setcookie('user',$user, time()+ (86400 * 30));

//unserializing so the cookie can be accessed by the computer
$user = unserialize($_COOKIE['user']);
//testing
echo $user['name'];



