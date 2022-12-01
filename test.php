<?php

class Solution{
 
public $A = [-2, -1];

    function solutions()
    {
        if(!count($this ->A))
        {
            return 1;
        }

        $i= 0;

        while(in_array(++$i, $this ->A)){}

        return $i;
    }
}

$soln = new Solution();


print_r($soln ->solutions());

