<?php

# Runtime: 4 ms, faster than 96.00% of PHP online submissions for Valid Parentheses.
# Memory Usage: 15.2 MB, less than 100.00% of PHP online submissions for Valid Parentheses.

/**
  * @param String $s
  * @return Boolean
  */
  
  function isValid($s) {
    $s = trim($s);
    if (!$s) {
      return true;
    }
    if (strlen($s) === 1) {
      return false;
    }

    $brackets = [
      '[' => ']',
      '(' => ')',
      '{' => '}',
    ];

    for ($stack = [], $length = strlen($s), $i = 0; $i < $length; $i++) {
      $symbol = $s[$i];
      if (array_key_exists($symbol, $brackets)) {
        $stack[] = $symbol;
      } else {
        $lastInStack = array_pop($stack);
        if (!isset($brackets[$lastInStack]) || $symbol !== $brackets[$lastInStack]) {
          return false;
        }
      }
    }

    print_r((count($stack) === 0) ? true : false);
    return (count($stack) === 0) ? true : false;
  }