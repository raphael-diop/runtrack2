<?php
var_dump($_POST); 

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
        <label for="str">Votre mot: </label>
        <input type="text" name="str" id="str" required>
        <select name="fonction" >
            <option value="">Options</option>
            <option value="gras">Gras</option>
         <option value="cesar">cesar</option>
            <option value="decalage">Décalage</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <div>
            <input type="submit" value="Submit" required>
        </div>
    </form>

</body>
</html>
,