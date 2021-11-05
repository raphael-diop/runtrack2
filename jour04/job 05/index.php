<?php
     if(isset($_POST['name']) && isset($_POST['Passeword'])){

     
        if($_POST['name'] == "john" && $_POST['Passeword'] == "Rambo"){
            echo "C'est pas ma guerre";
        }
       
        else{
            echo "Votre pire cauchemar";
        }
    }

    
  

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Get</title>
</head>
<body>
        <form action="" method="post" >
            <div>
                <label for="name"> Name: </label>
                <input type="text" name="name" value = >
            </div>
            <div>
                <label for="Passeword"> Passeword: </label>
                <input type="text" name="Passeword">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>

</body>
</html>