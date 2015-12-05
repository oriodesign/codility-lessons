<?php

function solution($A) {
    $length = count($A);
    $coveredCount = 0;
    $covered = array();
    $max = 0;
    
    for ($i=0;$i < $length; $i++) {
        $val = $A[$i];
        
        if ($val < 1) {
            continue;
        }
        
        if (!isset($covered[$val])) {
            $covered[$val] = true;
            if ($val>$max) {
               $max = $val;
            }
        }
        
    }
    
    for ($i=1;$i <= $max+1; $i++) {
        if (!isset($covered[$i])) {
            return $i;
        }
    }
    
}