<?php

function solution($S) {
    $len = strlen($S);
    $open = 0;
    for ($i=0;$i<$len;$i++) {
        if ($S[$i]==='(') {
            $open++;
        } else {
            $open --;
        }
        
        if ($open < 0) {
            return 0;
        }
        
    }
    return $open === 0 ? 1 : 0;
}