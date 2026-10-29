<?php
function factorial ($x){
    if ($x == 1) {
        return $x;
        }
        else {
        return $x * factorial ($x -1);
        }
    }
echo factorial(5);
echo "<br>";
?>