<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
<script>
// The Function to initialize suggestions
    function showSuggestion(str){
       // console.log(str)
       if(str.legth ==0){
           //to start the function with a default
           document.getElementById('output').innerhtml = '';
       //allowing the string function to work
       }else{
           //declaring the variable
           var xmlhttp = new XMLHttpRequest();
           //detecting state changes and authenticates if the websites are functional
           xmlhttp.onreadystatechange=function(){
               if(this.readyState == 4 && this.status == 200){
                   document.getElementById('output').innerHTML = this.responseText;
               }
           }
           //writes the get function
           xmlhttp.open("GET", "suggest.php?q="+str,true);
           //initiates the request
           xmlhttp.send();
       }
    }
</script>

</head>
<body>
    
<div class="container">
    <h1>Search Users</h1>
        <form>
        Search User: <input type="text" class="form-control primary" onkeyup="showSuggestion(this.value)">
        </form>
    <p>Suggestions:<span id="output" style="font-weight:bold"></span></p>
</div>

</body>
</html>