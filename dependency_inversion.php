<?php

/**
 * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * This class helps to show how the D [Dependency Inversion] in the SOLID principles of software development
 * actually works. It is very important to embrace the SOLID principles for effective and 
 * efficient software development.
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


    
    class dependency_inversion{
        
        private $try;
        
        function __construct(interfacer $major)
        {
         $this->try = $major;
         
            
        }
        
        
        function get_run($person_name)
        {
          return $this->try->run($person_name); 
        }
        
        
    }
    
    $get = new dependency_inversion(new testcase);
    
    echo $get->get_run("Mark");
    

?>