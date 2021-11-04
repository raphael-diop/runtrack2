<?php
$tab = [200, 204, 173, 98, 171, 404, 459];
$i = 0;
while (isset($tab[$i])) {
        if($tab[$i] % 2 == 0){
            echo $tab[$i] . " est un nombre paire <br/>";
        }

        else{
             echo $tab[$i] . " est un nombre impaire <br/>";
        }
        $i++;
}
   