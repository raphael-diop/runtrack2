<?php


    if(isset($_POST["reset"])){
        setcookie('nbvisites', $_COOKIE['nbvisites'] = 0);
    }

    if(isset($_COOKIE["nbvisites"])){
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
    }
    
    else{
        setcookie('nbvisites', 1); $_COOKIE['nbvisites'] + 1;
    }
    




echo "Nombre de visites:  $_COOKIE[nbvisites]"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="reset" value="reset">
    </form>
</body>
</html>