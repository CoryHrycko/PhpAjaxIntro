<?php
    //checking the post request
    if(isset($_POST['submit'])){
        //making sure the security of the server is perserved with htmlentities
        $username=htmlentities($_POST['username']);
        // setting cookies and timer
        setcookie('username', $username,time()+3600);
        // header directional function. to allow the submit to move to another page with the response
        header('Location: page2.php');
    }
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
    <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="username" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
</body>
</html>