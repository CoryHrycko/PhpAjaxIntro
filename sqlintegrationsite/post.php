<?php
    //defining root and other configs
    require('config/config.php');
    //required log in for the server
    require('config/db.php');

    if(isset($_POST['delete'])){
        //Get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
       
    $query = "DELETE FROM posts WHERE id={$delete_id}";
            //To test query to see if working
            //die($query)
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else{
            echo "ERROR: ".mysqli_error($conn);
        }




    }

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

<?php include('inc/header.php');?>


    <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>>
    <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at'] ?> by
        <?php echo $post['author'] ?>
        </small>
        <p><?php echo $post['body'] ?></p>
        <hr>
        <form class="pull-right" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
        <input type="submit"name="delete" value="Delete" class="btn btn-danger">
        </form>



<a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>
</div>
<?php include('inc/footer.php'); ?>






















