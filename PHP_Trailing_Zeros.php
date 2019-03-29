<?php 
// PHP program to count  
// trailing 0s in n! 
  
// Function to return trailing  
// 0s in factorial of n 
function findTrailingZeros( $n) 
{ 
    // Initialize result 
    $count = 0; 
  
    // Keep dividing n by powers 
    // of 5 and update count 
    for ($i = 5; $n / $i >= 1; $i *= 5) 
        $count += $n / $i; 
  
    return $count; 
} 
  
// Driver Code 
  
$n = 100; 
echo "Count of trailing 0s in " , 100,  
     "! is " , findTrailingZeros($n); 
  
// This code is contributed by vt_m 
?>

