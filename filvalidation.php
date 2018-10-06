<?php
//check posted data
/*if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
} else{
    echo 'No Data';
}

if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];
    //remove illeagal char
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        echo 'Email is Valid';
    } else {
        echo 'email is not valid';
    }
}
// test for boolean, email, float, int, ip,regexp,url
//filter sanitize for email, encoded, float, int, chars, string, url





$var = 23;

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var.' is a number';
} else {
    echo $var.' is not a number';
}
*/

$number = '111kdjdjdjdji2323421kdnvn';
var_dump(filter_var($var, FILTER_SANITIZE_INT));

?>
<form methods='post' action ="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input method = 'post' type="text" name="data">
    <button type="submit">Submit</button>
</form>