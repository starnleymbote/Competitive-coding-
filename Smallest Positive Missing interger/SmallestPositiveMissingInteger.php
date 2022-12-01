<?php

class SmallestPositiveMissingInteger
{
/**
 * -------------------------------------------------------------|
 * SAMPLE INPUTS AND EXPECTED OUTCOME                           |
 * -------------------------------------------------------------|
 * 
 * $input = [9, -5, 1, 5, 3] expected results : 2
 * $input = [1, 2, 3] expected results : 4
 * $input = [-1, -3] expected result : 1
 * 
 */

public $positiveIntArray = [];
public $inputs = [9, -5, 1, 5, 3];

 function positiveInts($A)
 {
    $smallestPostiveInt = 1;
    

    foreach ($A as $postivesInts) {
        

        if(!($smallestPostiveInt > $postivesInts) || ($smallestPostiveInt == $postivesInts))
        {
            array_push($this ->positiveIntArray, $postivesInts);
            sort($this ->positiveIntArray);

        }
    }

 }

 function missingInt()
 {

    $sortedArray = $this ->positiveIntArray;

    if(count($sortedArray) == 0)
    {
        return 1;
    }

    for($j = 0; $j <= (count($sortedArray) - 1); $j++)
    {

        if($j != (count($sortedArray) -1))
        {

            $diff = $sortedArray[$j+1] - $sortedArray[$j];

            if($diff > 1)
            {
                return $sortedArray[$j] + 1;
            }

        }
        else
        {
            return $sortedArray[$j] + 1; 
        }

        
    }

 }




}

$soln = new SmallestPositiveMissingInteger();


$soln ->positiveInts($soln->inputs);
$soln ->missingInt();

print_r($soln ->missingInt());