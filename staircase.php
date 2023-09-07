<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    for($i=0;$i<$n;$i++){
        for($j=0;$j<($n-$i)-1;$j++){
            echo " ";
        }
        for($k=0;$k<=$i;$k++){
            echo "#";
        }
        echo "\r\n";
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
