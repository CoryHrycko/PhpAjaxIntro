<?php
    
    setcookie('username', 'Frank',time()+(86400*30));
    
    //delete cookie
    //setcookie('username', 'Frank',time()-3600);
    
    if(count($_COOKIE)>0){
        //counting cookies
        echo "there are ".count($_COOKIE).' cookie saved';
    }else{
        echo 'there are no cookies saved';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '.$_COOKIE['username'].' is set<br>';

    }else {
        echo 'User is not set';
    }
?>