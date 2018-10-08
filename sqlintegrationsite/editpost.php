<?php
    //defining root and other configs
    require('config/config.php');
    //required log in for the server
    require('config/db.php');
    //check for submit
    if(isset($_POST['submit'])){
        //Get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
                WHERE id = {$update_id}";
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
    <h1> Add Posts</h1>
    <form method="POST"action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" value="<?php echo $post['title'];?>"name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" value="<?php echo $post['author'];?>"name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea type="text" name="body" class="form-control"><?php echo $post['body'];?>"</textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
    <hr>
</div>
<?php include('inc/footer.php'); ?>





















