<?php 
// PHP program to check  
// if M-th fibonacci  
// divides N-th fibonacci 
  
function check($n, $m) 
{ 
    // exceptional case for F(2) 
    if ($n == 2 || $m == 2 ||  
        $n % $m == 0)  
    { 
        echo "Yes" , "\n"; 
    } 
      
    // if none of the above cases, 
    // hence not divisible 
    else 
    { 
        echo "No" ," \n"; 
    } 
} 
  
// Driver Code 
$m = 3; $n = 9; 
check($n, $m); 
  
// This code is contributed 
// by anuj_67. 
?>
