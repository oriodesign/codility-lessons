<?php

function solution($N, $A) {
    $operationLength = count($A);
    $counters = array_fill(0, $N, 0);
    $max = 0;
    $nextMax = 0;
    
    for ($i=0;$i<$operationLength;$i++) {
        $operation = $A[$i];
        if ($operation === $N + 1) {
            $max = $nextMax;
        } else {
            $val = $counters[$operation-1];
            $result = $val < $max ? $max +1 : $val +1;
            $counters[$operation-1] = $result;
            if ($result > $nextMax) {
                $nextMax = $result;
            }
        }
        
    }
    
    for ($i=0;$i<$N;$i++) {
        $val = $counters[$i];
        $counters[$i] = $val < $max ? $max : $val;
    }
    
    return $counters;
    
}
