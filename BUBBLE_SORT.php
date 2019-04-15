<?php

/**
 * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * 
 * IMPLEMENTATION OF BUBBLE SORT ALGORITHM
 */


 $array = [5,3,2,1];
 
 $num = sizeof($array);
 
 $start_outer = 0;
 
 $passes = 0;
 
 while($start_outer < $num)
 {
 $start = 0;
 
 $flag = 0;
 
 
 
 while($start < $num)
 {
    
    
    if(($start + 1) < $num)
    {
      $array_val = $array[$start];
    $array_next = $array[$start + 1];
     
   if($array_val > $array_next)
   {
    $array[$start] = $array_next;
    $array[$start + 1] = $array_val;
    $flag += 1;
    
   }  
 
    
    }
    
    
 
  $start++;  
 }
 
   if($flag == 0)
    {
    //terminate loop
    break;
    }
    
    if($flag != 0)
    {
    $passes++;
    }
 
 print_r(["pass ".$passes."" => $array]);
 
 echo"</br>";
 
  $start_outer++;  
 }
 
 print_r(["sorted array" => $array, "number of passes" => $passes]);

  echo"</br>";
  echo"</br>";
        //SECOND BUBBLE SORT
        //-------------------


  function bubble_sort($array)
  {
     
     $array = $array;
    
    $num = sizeof($array);
    
    $start = 0;
    
    $passes = 0;
    
    while($start < $num)
    {
      $flag = 0;
        
    $inner_start = 0;
    
    while($inner_start < $num)
    {
    $progress = $inner_start + 1;
        
     if($progress < $num)   
    {
     $current = $array[$inner_start];
     
     $next = $array[$inner_start + 1];
     
     if($current > $next)
     {
      $temp = $current;
      
      $array[$inner_start] = $next;
      
      $array[$inner_start + 1] = $temp;
      
      $flag += 1;  
        
        
     }   
        
        
    }        
        
        $inner_start++;
        
    }
    
      
      if($flag == 0)
      {
        
       return[$array,$passes]; 
        
      }
      
      $passes++;
      
      $start++;  
    }
    
    
    
  }


  $array = [8,9,2,3,1];
  
  print_r(bubble_sort($array));



?>