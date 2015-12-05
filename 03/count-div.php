<?php

function solution($A, $B, $K) {
    

    $min = intval(ceil($A/$K)) * $K;
    
    
    if ($min > $B) {
        return 0;
    }
    
    $max = intval(floor($B/$K)) * $K;
    
    
    $result = intval(($max - $min) / $K) +1;
    
    return $result;
    
    
}