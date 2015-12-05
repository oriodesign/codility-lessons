<?php
function solution($A) {
    $length = count($A);
    $carsToEst = 0;
    $result = 0;
    for ($i=0; $i<$length; $i++) {
        if ($A[$i]===0) {
            $carsToEst++;
        } else {
            $result += $carsToEst;
        }
        
        if ($result > 1000000000) {
        return -1;
        }
    }
    
    return $result;
}