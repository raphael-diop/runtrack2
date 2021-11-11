<?php

session_start();
if (isset($_POST["prenom"]))
{
    if(!(isset($_SESSION["prenom"])))
    {
        $_SESSION["prenom"] = $_POST["prenom"];
    } else {
        $_SESSION["prenom"] .= ' '.$_POST["prenom"];
    }
}



if(isset($_POST["reset"])){
    unset($_SESSION["prenom"]);
}


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
        Prénom: <input type="text" name="prenom" id="prenom" > 
        <input type="submit" name="Envoyer" >
        <input type="submit" name="reset" value="reset" >
    </form>
    <hr>
    <hr>
    <table>
            <thead>
                <th>Prénoms</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php 
                    if(isset($_SESSION["prenom"])){
                         echo $_SESSION['prenom'] . "<br/>";
                    }
                   ?></td>

                </tr>
            </tbody>
        </table>
</body>
</html>