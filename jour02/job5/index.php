<?php

for($i = 2; $i <= 1000; $i++){
    $x = 0;
    for($j = 2; $j <= $i; $j++){
        if($i % $j == 0){
            $x ++;
        }
        
    }
    
        if($x == 1){
        echo $i ."<br/>";

    }
    

}
?>