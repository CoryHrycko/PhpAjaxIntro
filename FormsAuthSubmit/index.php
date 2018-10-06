<?php
//message variables
//the variables aredeclared empty so we can fill them later
$msg='';
$msgClass='';

//check for submit
if(filter_has_var(INPUT_POST,'submit')){
    //echo 'Submitted';
    //get form data
    $name= htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    //check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
        //passed
        //echo 'Passed';
        //check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
            //failed        
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        }else {
            //passed
            //echo 'Passed';
            $toEmail = 'coryhrycko@gmail.com';
            $subject = 'Contact Request from'.$name;
            $body='<h2> Contact Request</h2>
            <h4>Name</h4><p>'.$name.'</P>
            <h4>Email</h4><p>'.$email.'</P>
            <h4>Message</h4><p>'.$message.'</P>';

            //email Headers
            $headers= "MIME-Version:1.0"."\r\n";
            $headers .="Content-Type:test/html;Charset=UTF-8"."
            \r\n";
            //additional headers
            $headers .="From: ".$name."<".$email.">"."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                //Passed email sent
                $msg = 'Your Email has been sent';
                $msgClass = 'alert-success';
            }else{
                //failed to send email
                $msg = 'Your email was not sent properly';
                $msgClass = 'alert-danger';
            }
        }
    }else{
        //failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- This is a style sheet from bootswatch in order to speed up the process. And I like the Greys-->
    <link rel='stylesheet' href='https://bootswatch.com/4/slate/bootstrap.min.css'>
    
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
         <div class="navbar-header">
          <a href="index.php" class="navbar-brand">My Website</a>
         </div>
        </div>
    </nav>
    <div class="container">
    <?php if($msg !=''): ?>
        <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
    <?php endif; ?>
        <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <!-- this form has the wonderful action of keeping the text in the fields-->
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text"name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea type="text"name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>