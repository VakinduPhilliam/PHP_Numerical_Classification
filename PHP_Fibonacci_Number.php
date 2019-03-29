<?php 
// PHP program to check if 
// x is a perfect square 
  
// A utility function that 
// returns true if x is  
// perfect square 
function isPerfectSquare($x) 
{ 
    $s = (int)(sqrt($x)); 
    return ($s * $s == $x); 
} 
  
// Returns true if n is a 
// Fibinacci Number, else false 
function isFibonacci($n) 
{ 
    // n is Fibinacci if one of  
    // 5*n*n + 4 or 5*n*n - 4 or  
    // both is a perferct square 
    return isPerfectSquare(5 * $n * $n + 4) ||  
           isPerfectSquare(5 * $n * $n - 4); 
} 
  
// Driver Code 
for ($i = 1; $i <= 10; $i++) 
if(isFibonacci($i)) 
echo "$i is a Fibonacci Number \n"; 
else
echo "$i is a not Fibonacci Number \n" ; 
  
// This code is contributed by mits 
?>

