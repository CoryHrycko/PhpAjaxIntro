<?php

    session_start();
    //can update session at anytime on any page

    $name =$_SESSION['name'];
    /* This allows for those annoying errors to go away. It sets a default if nothing is set
    $name = isset($_SESSION['name']) ? $_SESSION['name']
    : 'Guest'; // this allows to test to see if the session is still active
*/
    $email=$_SESSION['email'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
</body>
</html>