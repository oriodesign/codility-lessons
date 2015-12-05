<?php

function solution($A) {
    $length = count($A);
    $coveredCount = 0;
    $covered = array();
    
    for ($i=0;$i < $length; $i++) {
        $val = $A[$i];
        
        if ($val > $length) {
            return 0;
        }
        
        if (!isset($covered[$val])) {
            $covered[$val] = true;
            $coveredCount++;
        }
        
        if ($coveredCount===$length) {
            return 1;
        }
    
    }
    
    return 0;
    
}