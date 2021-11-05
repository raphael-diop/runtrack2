<?php
$i = 0;
foreach($_POST as $key => $value ){
    $i++;
}
echo "Nombres de post = " . $i


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
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Enter your email: </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <input type="submit" value="Submit" required>
        </div>
        </form>

</body>
</html>