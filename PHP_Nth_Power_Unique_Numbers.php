<?php 
// PHP program to count  
// number of ways any 
// given integer x can 
// be expressed as n-th 
// power of unique  
// natural numbers. 
  
// Function to calculate and return 
// the power of any given number 
function power($num, $n) 
{ 
      
    if ($n == 0) 
        return 1; 
    else if ($n % 2 == 0) 
        return power($num, (int)($n / 2)) *  
               power($num, (int)($n / 2)); 
    else
        return $num * power($num, (int)($n / 2)) *  
                      power($num, (int)($n / 2)); 
} 
  
// Function to check power 
// representations recursively 
function checkRecursive($x, $n, 
                        $curr_num = 1,  
                        $curr_sum = 0) 
{ 
      
    // Initialize number of 
    // ways to express 
    // x as n-th powers  
    // of different natural 
    // numbers 
    $results = 0; 
  
    // Calling power of 'i'  
    // raised to 'n' 
    $p = power($curr_num, $n); 
    while ($p + $curr_sum < $x) 
    { 
          
        // Recursively check all 
        // greater values of i 
        $results += checkRecursive($x, $n,  
                                   $curr_num + 1, 
                                   $p + $curr_sum); 
        $curr_num++; 
        $p = power($curr_num, $n); 
    } 
  
    // If sum of powers  
    // is equal to x 
    // then increase the 
    // value of result. 
    if ($p + $curr_sum == $x) 
        $results++; 
  
    // Return the final result 
    return $results; 
} 
  
// Driver Code. 
$x = 10; $n = 2; 
echo(checkRecursive($x, $n)); 
  
// This code is contributed by Ajit. 
?>
