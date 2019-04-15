<?php

/**
  * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * ROTATING A MATRIX BY 90 DEGREES
 * 
 */



    $mat =  array(array(1, 2, 3, 4), 
              array(5, 6, 7, 8), 
              array(9, 10, 11, 12), 
              array(13, 14, 15, 16)); 
     
              
    
    
        /* $mat =  array(array(1, 2, 3, 4), 
              array(5, 6, 7, 8), 
              array(9, 10, 11, 12)); 
              
           */          
        
              
              

        function matrix_transpose($matrix)
        {
          $count_matrix = sizeof($matrix);  
            
        
            
          
          if($count_matrix > 0)
          {
                $row_start = 0;
            
            $count_inner_matrix = sizeof($matrix[0]);
     
            
            while($row_start < $count_matrix)
            {
                $transpose_start = $row_start;
                
                while($transpose_start < $count_inner_matrix)
                {
                
                $temp = $matrix[$row_start][$transpose_start];
                
               $matrix[$row_start][$transpose_start] = $matrix[$transpose_start][$row_start]; 
                
                $matrix[$transpose_start][$row_start] = $temp;
                
                $transpose_start++;
                }
                
                
                
               $row_start++; 
            }
            
            
            return$matrix;
            
          }
            
            
            
        }

        
        function matrix_rotate_anticlockwise($matrix)
        {
               //key column constant and vary row
           $count_matrix = sizeof($matrix);  
            

          if($count_matrix > 0)
          {   
            
            $count_inner_matrix = sizeof($matrix[0]);
            
            $start = 0;
            
            while($start < $count_inner_matrix)
            {
                
              $row_start = 0;
              
              $row_variable = $count_matrix - 1;
              
              while($row_start < $row_variable)
              {
                
                $temp = $matrix[$row_start][$start];
                
                $matrix[$row_start][$start] = $matrix[$row_variable][$start];
                
                 $matrix[$row_variable][$start] = $temp;
                
                $row_variable--;
                $row_start++;
              }   
                
                
                
                
                $start++;
            } 
            
          return$matrix;
          
          }
            
            
        }
          
          
          
        function matrix_rotate_clockwise($matrix)
        {
            //key row constant and vary column
            
           $count_matrix = sizeof($matrix);  
            

          if($count_matrix > 0)
          {   
            
            $count_inner_matrix = sizeof($matrix[0]);
            
            $start = 0;
            
            while($start < $count_matrix)
            {
                
              $row_start = 0;
              
              $row_variable = $count_inner_matrix - 1;
              
              while($row_start < $row_variable)
              {
                
                $temp = $matrix[$start][$row_start];
                
                $matrix[$start][$row_start] = $matrix[$start][$row_variable];
                
                 $matrix[$start][$row_variable] = $temp;
                
                $row_variable--;
                $row_start++;
              }   
                
                
                
                
                $start++;
            } 
            
          return$matrix;
          
          }
            
            
        }  
        
        
         
        
        
        function print_matrix($matrix)
        {
            
          $count_matrix = sizeof($matrix);  
          
          $start = 0;
          
          while($start < $count_matrix)
          {
            $inner_start = 0;
            
            $inner_matrix_count = sizeof($matrix[$start]);
            
            while($inner_start < $inner_matrix_count)
            {
               
               if(strlen($matrix[$start][$inner_start]) > 1)
               {
                echo$matrix[$start][$inner_start]." ";
               }
               else
               {
                echo$matrix[$start][$inner_start]." "." ";
               }
               
                
             $inner_start++;   
            }
            
             echo"</br>";
             
            $start++;
          }
            
            
        }
        

       // print_matrix($mat);



        //print_r(matrix_transpose($mat));  
        
       function matrix_rotate($matrix,$rotate_type)
       {
        if(sizeof($matrix) > 0)
        {
            
          if( strtolower($rotate_type) == "anticlockwise")
        {
            $transposed_matrix = matrix_transpose($matrix);
            
            $rotated_matrix = matrix_rotate_anticlockwise($transposed_matrix);
            
            print_matrix($rotated_matrix);
            
        }
        
        
        
        if(strtolower($rotate_type) == "clockwise")
        {
          $transposed_matrix = matrix_transpose($matrix);
            
            $rotated_matrix = matrix_rotate_clockwise($transposed_matrix);
            
            print_matrix($rotated_matrix);
        }
        
        if((strtolower($rotate_type) != "clockwise") && (strtolower($rotate_type) != "anticlockwise"))
        {
           echo("You need to specify a rotate style");     
        }
      
            
        }
        else
        {
          echo("No Matrix was given!");  
        }
       
        
       }      
                
                
       matrix_rotate($mat,"clockwise");         

?>