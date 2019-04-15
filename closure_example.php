<?php

/**
  * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * IMPLEMENTATION OF CLOSURE
 * 
 */
    $int = 1;
    $anon = function ($arg)
    {
        if($arg > 10)
        {
            echo("closure arg is greater than 10 as ".$arg);
        }
        else{
            echo("closure arg is not greater than 10 as ".$arg);
        }
    };
    
    $closure = function(Closure $anon,$int){
        $anon($int);
    };
    
    $closure($anon,$int);
    
    
    
        $int = 1;
    $anon = function ($arg)
    {
        if($arg > 10)
        {
            echo("closure arg is greater than 10 as ".$arg);
        }
        else{
            echo("closure arg is not greater than 10 as ".$arg);
        }
    };
    
    $closure = function(Closure $anon,$int){
        $anon($int);
    };
    
    
    
    array_map($closure,[$anon],[$int]);
    
    
    
    
    function myfunction($num,$val)
    {
      return(($num+$val)*$num);
    }
    
    $a=array(1,2,3,4,5);
    print_r(array_map("myfunction",$a,$a));

?>