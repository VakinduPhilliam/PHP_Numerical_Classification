<?php 
// PHP program to check if sum of digits of a number divides it 
  
// Function to check if sum of 
// digits of a number divides it 
function isSumDivides($N) 
{ 
    $temp = $N; 
  
    $sum = 0; 
  
    // Calculate sum of all of  
    // digits of N 
    while ($temp)  
    { 
        $sum += $temp % 10; 
        $temp = (int)$temp / 10; 
    } 
  
    if ($N % $sum == 0) 
        return 1; 
    else
        return 0; 
} 
  
// Driver Code 
$N = 12; 
  
if (isSumDivides($N)) 
    echo "YES"; 
else
    echo "NO"; 
      
// This code is contributed by ajit 
?>
