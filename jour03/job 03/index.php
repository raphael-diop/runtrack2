<?php
$str = 'I am sorry Dave I am afraid I can t do that';
$bool = false;
for($i = 0; isset($str[$i]); $i++){
    if($str[$i] == 'a'|| $str[$i] == 'e' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y'){
        echo $str[$i];
    }
    else {
        echo $bool;
    }
}
