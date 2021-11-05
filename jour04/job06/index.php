<?php

if(isset($_GET['nombre'])){

    if($_GET['nombre'] % 2 == 0){
        echo "Nombre Paire";
    }
    
    else{
        echo "Nombre Impaire";
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
        <form action="" method="get" >
            <div>
                <label for="nombre"> nombre: </label>
                <input type="number" name="nombre" value >
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>

</body>
</html>