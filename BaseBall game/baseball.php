<?php

/**
 * -------------------------------------------------------------|
 * SAMPLE INPUTS AND EXPECTED OUTCOME                           |
 * -------------------------------------------------------------|
 * 
 * $ops = ["5","-2","4","C","D","9","+","+"] expected results : 27
 * $ops = ["5", "2", "C", "D", "+"] expected results : 30
 * $ops = ["1"] expected result : 1
 * 
 */

$ops = ["5", "2", "C", "D", "+"];

$ops1 = [];

foreach($ops as $op)
{

    switch ($op) {
        case 'C':
            array_pop($ops1);
            //unset($ops1[count($ops1) - 1]);
            break;
    
        case 'D':
            $mult = $ops1[count($ops1) - 1] * 2;
            array_push($ops1, $mult);
            break;

        case '+':
            $sum = $ops1[count($ops1) - 1] + $ops1[count($ops1) - 2];
            array_push($ops1, $sum);
            break;

        default:
            array_push($ops1, (int)$op);
            break;
    }

}

print_r(array_sum($ops1));

?>