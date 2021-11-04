<?php


$str = "on n est pas le meilleur quand on le croit mais quand on le sait ";
$dic = 
[
    "voyelles" => ["a", "e", "i", "o", "u", "v"],
    "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"]
];
$comptvoyelles = 0;
$comptconsonnes = 0;
for($i = 0; isset($str[$i]); $i++){
    for($j = 0; isset($dic["voyelles"][$j]); $j++){
        if(($dic["voyelles"][$j]) == ($str[$i])){
            $comptvoyelles ++;
        }
    }
    for($j = 0; isset($dic["consonnes"][$j]); $j++){
        $z = 0;
        if(($dic["consonnes"][$j]) == ($str[$i])){
            $comptconsonnes ++;
        }
    
    }
    
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau </title>
</head>
<body>
    <table>
    <thead>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $comptconsonnes ?></td>
            <td> <?php echo $comptvoyelles  ?></td>
        </tr>
    </tbody>
    </table>
    
</body>
</html>

<style>
    table{
        border: solid 1px;
    }
        th {
        border: solid 1px;
        background-color: lightgrey;
    }
    td{
        border: solid 1px;
    }

</style>