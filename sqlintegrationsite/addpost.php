<?php
    //defining root and other configs
    require('config/config.php');
    //required log in for the server
    require('config/db.php');

?>

<?php include('inc/header.php');?>
    <div class="container">
    <h1> Add Posts</h1>
    <form method="POST"action="<?php $_SERVER['PHP_SELF';?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <input type="text" name="body" class="form-control">
        </div>
    
    </form>
</div>
<?php include('inc/footer.php'); ?>





















