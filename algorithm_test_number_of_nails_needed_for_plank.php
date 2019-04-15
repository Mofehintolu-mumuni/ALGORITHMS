<?php

/**
 *  
  * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * 
 * 
 * Algorithm Problem: Count the minimum number of nails that allow a series of planks to be nailed.
 */

    function solution($A, $B, $C) {
    // write your code in PHP7.0
    
    /*
    sort($A);
    
    sort($B);
    
    sort($C);
    */
    
    $Acount = sizeof($A);
    
    $Bcount = sizeof($B);
    
    $Ccount = sizeof($C);
    
    if(($Acount > 0) && ($Bcount > 0) && ($Ccount > 0) && ($Acount == $Bcount) && ($Ccount >= ($Bcount - 1)))
    {
      
     $nailed = 0; 
     //run loop based on count
     
     $start = 0;
     
     while($start < $Acount)
     {
        
      $c_inner_start = 0;
      
          
       while($c_inner_start < $Ccount)
       {
        if($C[$c_inner_start] > 0)
        {
            
        if(($C[$c_inner_start] >= $A[$start]) && ($C[$c_inner_start] <= $B[$start]))
        {
          $nailed +=1;
          
          //make nail zero
          
          $C[$c_inner_start] = 0;
          
          $c_inner_start = $Ccount; 
            
        }  
        
        }
       
        
        
        
       $c_inner_start++; 
       } 
        
        
      $start++;  
     }  
     
     if($nailed > 0)
     {
     return $nailed;
     }
     else
     {
     return -1;   
     }
        
        
    }
    else
    {
        
        return -1;
    }
    
    
    
    }

?>