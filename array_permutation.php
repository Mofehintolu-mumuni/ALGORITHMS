<?php

/**
 * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 

A non-empty array A consisting of N integers is given.

A permutation is a sequence containing each element from 1 to N once, and only once.

For example, array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2

is a permutation, but array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3

is not a permutation, because value 2 is missing.

The goal is to check whether array A is a permutation.

Write a function:

    function solution($A);

that, given an array A, returns 1 if array A is a permutation and 0 if it is not.

For example, given array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3
    A[3] = 2

the function should return 1.

Given array A such that:
    A[0] = 4
    A[1] = 1
    A[2] = 3

the function should return 0.

Write an efficient algorithm for the following assumptions:

        N is an integer within the range [1..100,000];
        each element of array A is an integer within the range [1..1,000,000,000].


 */



    function solution($A) {
        // write your code in PHP7.0
        
        $array = $A;
        $array_count = sizeof($array);
        
        $array_max_val = max($array);
        
        if($array_count > 0)
        {

        
        if($array_max_val === $array_count)
        {
            
         $start_outter = 0;
         
         $found_store = 0;
         
         //sort array         
           sort($array);
           
         while($start_outter < $array_max_val)
         {
           $value_to_search = $array_max_val - ($array_max_val - 1) + $start_outter;
           //echo $value_to_search."</br>";
           //binary search start
           
                      
           $new_max = $array_count - 1;
           $new_min = 0;
           
           while($new_max >= $new_min)
           {
           $splitter = ceil(($new_max + $new_min)/2);
           
            // echo $splitter."</br>";
           
           if($array[$splitter] > $value_to_search)
           {
            $new_max = $splitter - 1; 
            
            
           }
           else
           {
            $new_min = $splitter + 1;
            
           }
           
           if($array[$splitter] == $value_to_search)
           {
            $found_store += 1; 
                        
           }
            
            
            
            
           }
           
           
            
            
           $start_outter++; 
         }   
         
         if($found_store == $array_count)
         {
            
            return 1;
         }
         else
         {
            
            return 0;
         }
         
            
        }
        else{
            return 0;
        }
        
         }
        else{
            return 0;
        }
        
    }


    $A = [4,3,2];
    
    echo solution($A);

?>