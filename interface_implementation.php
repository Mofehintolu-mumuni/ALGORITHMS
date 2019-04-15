 <?php

/**
 * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * This class illustrates a simple implementation of 
 * interfaces and the need to use them while developing 
 *  software
 * 
 */

    interface interfacer{
        
        function run($person_name);
       
      function jump($person_name);
        
    }

 class testcase implements interfacer {
    
     function run($person_name)
     {
        echo$person_name." is running";
     }
    
    
    function check($person_name)
    {
      $this->run($person_name);  
        
    }
    
    function jump($person_name)
    {
        
      echo$person_name." is jumping";
        
    }
    
    
 }
 
 $trial = new testcase();
 
 $trial->check("PETER");
 
 //print_r(class_implements($trial));


?>