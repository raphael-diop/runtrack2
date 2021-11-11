<?php
session_start();

if(isset($_POST["reset"])){
    session_destroy();
}

if(!(isset($_SESSION["nbvisites"]))){
        $_SESSION["nbvisites"] = 0;
    }
else{
        $_SESSION["nbvisites"] ++;
    }

echo "Nombre de visites".$_SESSION["nbvisites"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form method="POST">
    <input type="submit" name="reset" value="reset">
    </form>

</body>
</html>