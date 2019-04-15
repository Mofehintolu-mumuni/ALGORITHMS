<?php

/**
 * @author gencyolcu
 * 

Write a function:

    function solution($A, $B, $K);

that, given three integers A, B and K, returns the number of integers within the range [A..B] that are divisible by K, i.e.:

    { i : A = i = B, i mod K = 0 }

For example, for A = 6, B = 11 and K = 2, your function should return 3, because there are three numbers divisible by 2 within the range [6..11], namely 6, 8 and 10.

Write an efficient algorithm for the following assumptions:

        A and B are integers within the range [0..2,000,000,000];
        K is an integer within the range [1..2,000,000,000];
        A = B.


 */

    function solution($A, $B, $K) {
        // write your code in PHP7.0
         
        $counter_updater = 0;
        
        if($A <= $B)
        {
              
        if($A == $B)
        {
            
        if(($A % $K) == 0)
        {
         $counter_updater += 1;
            
         return $counter_updater;   
        }
        
                  
        }
        
        $array_range = range($A,$B);
        
        $array_count = sizeof($array_range);
        
        $start = 0;
        
        while($start < $array_count)
        {
        if(($array_range[$start] % $K) == 0)
        {
          $counter_updater += 1;  
            
        }
        
            
         $start++;   
        }
        
        return $counter_updater;
        
        
        }
        else
        {
            return $counter_updater;
        }
        
    }
    
    $A = 6;
    $B = 26; 
    $K = 13;
    
    echo solution($A, $B, $K);
    
    

?>