<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    //Variable chaine de caractères
    $str = "En légende";
    //Variable nombres entiers
    $int = 64;
    //Variable nombres décimaux
    $float = 64.141;
    //Variable true or false
    $bool = true;
    ?>
    <table>
        <thead>
            <th>
                <td>type</td>
                <td>nom</td>
                <td>valeur</td>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo gettype($str); ?></td>
                <td>Variable correspondant à une chaine de caractères</td>
                <td><?php echo $str ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo gettype($int); ?></td>
                <td>Variable correspondant à nombre entier</td>
                <td><?php echo $int ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo gettype($float); ?></td>
                <td>Variable correspondant à une chaine de caractères</td>
                <td><?php echo $float ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo gettype($bool); ?></td>
                <td>Variable correspondant à une chaine de caractères</td>
                <td><?php echo $bool ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>

<style>
    td {
        border: 1px solid black; 
        padding: 10px;
        background-color: lightgrey;
        }

   
</style>