<?php  
    // example 1 
  
    for ($i = 1; $i <= 9; $i++) {  
    echo $i;  
    }  
    echo "</br>";  
      
     // example 2
  
    for ($i = 1; ; $i++) {  
        if ($i > 9) {  
            break;  
        }  
        echo $i;  
    }  
    echo "</br>";  
      
     // example 3   
  
    $i = 1;  
    for (; ; ) {  
        if ($i > 9) {  
            break;  
        }  
        echo $i;  
        $i++;  
    }  
    echo "</br>";  
      
    // example 4 
  
    for ($i = 1, $j = 0; $i <= 9; $j += $i, print $i, $i++);  
?>  