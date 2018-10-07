<?php
    //defining root and other configs
    require('config/config.php');
    //required log in for the server
    require('config/db.php');
    //sql query 
    $query = 'SELECT * FROM posts';

    //get result


    $result = mysqli_query($conn, $query);
//fetching the data in an associate array[name->cory]

    $posts=mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
        <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at'] ?> by
            <?php echo $post['author'] ?>
            </small>
            <p><?php echo $post['body'] ?></p>
            <a class="btn btn-default" href=" post.php?id=<?php echo $post['id'];?> ">Read more</a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>






















