<?php
function bonjour($jour){
    if($jour === true){
        echo "bonjour";
    }
    else if($jour === false){
        echo "bonsoir";
    }
    else if($jour != true || $jour != false){
        echo "ty as rentré nimp woula";
    }
}

bonjour(true);
?>