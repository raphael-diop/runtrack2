<?php
//$tab = ["A", "a", "B", "b", "E", "e", "G", "g", "L", "S", "s", "T", "t"];
function leetspeak($str){
    $tab = ["A", "a", "B", "b", "E", "e", "G", "g", "L", "S", "s", "T", "t"];
    for($i = 0; isset($str[$i]); $i++){
        for($x = 0; isset($tab[$x]); $x++){
            if($str[$i] == $tab[$x]){
                if($tab[$x] == "A" || $tab[$x] == "a"){
                    $str[$i] = "4";
                }
                else if($tab[$x] == "B" || $tab[$x] == "b"){
                    $str[$i] = "8";
                }
                else if($tab[$x] == "E" || $tab[$x] == "e"){
                    $str[$i] = "3";
                }
                else if($tab[$x] == "G" || $tab[$x] == "g"){
                    $str[$i] = "6";
                }
                else if($tab[$x] == "L" || $tab[$x] == "l"){
                    $str[$i] = "1";
                }
                else if($tab[$x] == "S" || $tab[$x] == "s"){
                    $str[$i] = "5";
                }
                else if($tab[$x] == "T" || $tab[$x] == "t"){
                    $str[$i] = "7";
                }
            }
        }
       }

return($str);
}
 echo leetspeak("A bon en gros le soir t'es bourré");











 /*switch($str[$i]){
    case 'A' || 'a'; 
    $str[$i] = 4;
    break;
    case 'B' || 'b'; 
    $str[$i] = 8;
    break;
    case 'E' || 'e'; 
    $str[$i] = 3;
    break;
    case 'G' || 'g'; 
    $str[$i] = 6;
    break;
    case 'L' || 'l'; 
    $str[$i] = 1;
    break;
    case 'S' || 's'; 
    $str[$i] = 5;
    break;
    case 'T' || 't'; 
    $str[$i] = 7;
    break;
    default: $str[$i];*/
