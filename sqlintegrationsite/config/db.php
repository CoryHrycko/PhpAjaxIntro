<?php
// Create Connection
    $conn=mysqli_connect('localhost','root','sSIwOsFUjpFySSqY','PhpBlog');

//check connection
if(mysqli_connect_errno()){
    //connection failed
    echo 'failed to connect to Mysql'.mysqli_connect_errno();
}
