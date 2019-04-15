<?php

/**
  * @author Mofehintolu Mumuni
 * @copyright 2019 |  Mofehintolu Mumuni 
 * 
 * ROTATING A MATRIX COLOCKWISE OR ANTI-CLOCKWISE BY ANY DEGREE
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
              
              $row_variable = $count_matrix - 1;
              
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
        



            
            
            
                       
       function recursive_rotation_clockwise($flip,$matrix)
       {
        $matrixo = $matrix;
        
        if($flip > 0)
        {
             
          $transposed_matrix = matrix_transpose($matrix);
          
         
            
          $rotated_matrix = matrix_rotate_clockwise($transposed_matrix);
        
       $flip -= 1;
     
       recursive_rotation_clockwise($flip,$rotated_matrix);
       
        }
        else
        {
        print_matrix($matrix);
     
       
        }
        
        
        
        }
        
        
        
        
         function recursive_rotation_anticlockwise($flip,$matrix)
       {
        
        if($flip > 0)
        {
             
          $transposed_matrix = matrix_transpose($matrix);
            
          $rotated_matrix = matrix_rotate_anticlockwise($transposed_matrix);
             
       $flip -= 1;
       
       recursive_rotation_anticlockwise($flip,$rotated_matrix);
       
        }
        else
        {
            
 
            print_matrix($matrix);
        }
        
        
        
       }    

        


        
        
       function matrix_rotate($matrix,$rotate_type,$angle)
       {
        if(sizeof($matrix) > 0)
        {
            
          if( strtolower($rotate_type) == "anticlockwise")
        {
            
            if($angle == 90)
            {
               $flip = 1; 
            }
            
            if($angle == 180)
            {
                $flip = 2; 
            }
            
            if($angle == 270)
            {
               $flip = 3;  
            }
            
            if($angle == 360)
            {
              $flip = 4;   
            }
            
            
            
         recursive_rotation_anticlockwise($flip,$matrix);
           
            
        }
        
        
        
        if(strtolower($rotate_type) == "clockwise")
        {
            
            
            
            if($angle == 90)
            {
               $flip = 1; 
            }
            
            if($angle == 180)
            {
                $flip = 2; 
            }
            
            if($angle == 270)
            {
               $flip = 3;  
            }
            
            if($angle == 360)
            {
              $flip = 4;   
            }
            
          
   
          
           recursive_rotation_clockwise($flip,$matrix);
            
 
           
        
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
                
           
        
        
        
        
        
        
        
       function rotate_with_degree_choice($matrix,$rotate_type,$angle)
       {
        if( (is_numeric($angle) != "TRUE") && ($angle < 90)){
            
            echo"Matrix rotation must be in steps of 90 degrees";
            
        }
        else
        {
   
            
            if(($angle != 360) && ($angle != 270) && ($angle != 180) && ($angle != 90))
            {
                
                
            echo"Matrix rotation must be in steps of 90 degrees";  
                
                
            }
            else
            {
                echo("starting......</br></br>");
                
              matrix_rotate($matrix,$rotate_type,$angle); 
              
               
                 echo("</br></br>finishing......"); 
            }
            
            
        }
        
        
       } 
       
       
          
          
     rotate_with_degree_choice($mat,"anticlockwise",270);    
          
 
             
             
             
             
             
             
             
             
             //////////
             
             
             
             
             
             
             
               function solution($A) {
    // write your code in PHP7.0
  
  $array = $A;
  
  $array_count = sizeof($array);
  
  $paint_store = 1;
  
  $one_apint_flag = 1;
  
  
  $start = 0;
  
  $array_of_values = [];
  
  while($start < $array_count)
  {
    if($array[$start] > 1)
    {
        
    if($start <= ($array_count - 1))
    {
     
     $inner_loop_start = $start;
      
    while($inner_loop_start < $array_count)
    {
      if($array[$inner_loop_start] > 1)
      {
      
      $array_of_values[] = $array[$inner_loop_start];
        
        
        
      }
      else
      {
        
       $start = $inner_loop_start;
       
       $inner_loop_start = $array_count;
        
      }
        
        
        
      $inner_loop_start++;  
    } 
        
        
        
    }
    
        
        
        
    }
    
    
    
    $start++;
  }
  
  
  $newer_count = sizeof($array_of_values);
  
  $outter = 0;
  
  while($outter < $newer_count)
  {
   $search_array = sort($array_of_values[$outter]);
   
   $max_value = max($search_array);
   
   $neddle = 2;
   
   while($neddle < $max_value)
   {
    
    
     $new_count = sizeof($search_array); 
     
     $traverse_array = $search_array;
     
     $min_key = 0;
    
    $max_key = $new_count - 1;
    
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
      $paint_store +=1;
        
     }    
        
    }
     
    
    
    
    $neddle++;
   }
    
    
  }
  
  
  if($paint_store < 1000000000)
  {
    return $paint_store;
    
  }
  else
  {
    return -1;
  }
  
    
  }


?>