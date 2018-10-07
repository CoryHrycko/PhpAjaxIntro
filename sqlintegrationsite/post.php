<?php
    //defining root and other configs
    require('config/config.php');
    //required log in for the server
    require('config/db.php');
    //get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    //sql query 
    $query = 'SELECT * FROM posts WHERE id= '.$id;

    //get result


    $result = mysqli_query($conn, $query);
//fetching the data in an associate array[name->cory]

    $post=mysqli_fetch_assoc($result);
    //can put in var dump here
    //var_dump($posts);
//free result

    mysqli_free_result($result);

//close connection

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>>
    <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at'] ?> by
        <?php echo $post['author'] ?>
        </small>
        <p><?php echo $post['body'] ?></p>
</div>
</body>
</html>






















