<?php

function solution($A) {
    $length = count($A);
    $result = 0;
    $averageResult = 20001;
    for ($i=0;$i < $length-1;$i++) {
        $average = ($A[$i] + $A[$i+1]) / 2;
        if ($averageResult > $average) {
            $averageResult = $average;
            $result = $i;
        }
        if (!isset($A[$i+2])) {
            continue;
        }
        $average = ($A[$i] + $A[$i+1] + $A[$i+2]) / 3;
        if ($averageResult > $average) {
            $averageResult = $average;
            $result = $i;
        }
        
    }
    
    return $result;
}