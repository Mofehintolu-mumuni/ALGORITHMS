<?php


/**
  * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * Implementation of Binary search algorithm
 * 
 */


    $array = [1,81,9,12,4,5,445,623,267,43546,243,5576,353,23,24,867,996,3423,567,23245];
    
    $needle = 23245;
    
    function binary_search($array,$needle)
    {
    
    
    $numb = count($array);    
    
    sort($array);
    $search_array = $array;
    $steps = 0;
    
    if($numb > 2)
    {
    $to_find = $needle;
    
    $min = 0;
    
    $max = $numb - 1;
    
    
    while($max >= $min)
    {
      $steps++;
        
    $split = ceil(($max + $min)/2);  
   
    if($search_array[$split] > $to_find)
    {
     $max  = $split - 1;
       
    }   
    else
    {
     $min = $split + 1;
        
    }    
    if($search_array[$split] === $needle)
    {
     return array("value" => $search_array[$split],"steps taken" => $steps);  
       
    }   
        
    }
    
    return"Value not found";
        
    }
     else
     {
       
       return "cannot carry out binary search";
     }
         
    }
    
  //binary_search($array,$needle); 
   $result = binary_search($array,$needle);
    
   if(is_array($result) === TRUE)
   {
   print_r($result); 
    
   }
   elseif(is_string($result) === TRUE)
   {
    echo $result;
   }
   else{
     echo $result;
   }
   
   
   echo"</br>";
   echo"</br>";
   echo"</br>";
   
           //ANOTHER BINARY SEARCH
           //---------------------
   
  function another_binary_search($array,$neddle)
    {
      
     $array_count = sizeof($array); 
     
     $traverse_array = $array;
     
     $min_key = 0;
    
    $max_key = $array_count - 1;
    
    $search_steps = 0;
    
    while($max_key >= $min_key)
    {
        
     $mid_point = ceil(($max_key + $min_key)/2);
     
     if($traverse_array[$mid_point] > $neddle)
     {
      $max_key = $mid_point - 1;  
        
     }
     else
     {
       $min_key = $mid_point + 1;
     }  
     
     
     if($traverse_array[$mid_point] == $neddle)
     {
        return ["location_key" => $mid_point, "Number of steps" => $search_steps];
        
     }
     
     $search_steps += 1;
        
        
    }
     return"Value not found";    
        
    }
    
    
    $array = [1,81,9,12,4,5,445,623,267,43546,243,5576,353,23,24,867,996,3423,567,23245];
    
    $neddle = 23245;
    
    print_r(another_binary_search($array,$neddle));


?>