<?php
function calcule($a, $operation, $b){
    switch($operation){
        case '+';
        $resultat = $a + $b;
        break;
        case '-';
        $resultat = $a - $b;
        break;
        case '*';
        $resultat = $a * $b;
        break;
        case '/';
        $resultat = $a / $b;
        case '%';
        $resultat = $a % $b;
        break;
    }
    
    return($resultat);
}
echo calcule(4, '*' , 6);