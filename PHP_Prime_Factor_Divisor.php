<?php 
// PHP program to find if all prime factors of y divide x. 
  
function gcd ($a, $b)  
{ 
    return $b == 0 ? $a :  
        gcd($b, $a % $b); 
}  
  
// Returns true if all prime  
// factors of y divide x. 
function isDivisible($x, $y) 
{ 
    if ($y == 1) 
        return true; 
      
    $z = gcd($x, $y); 
      
    if ($z == 1) 
        return false; 
      
    return isDivisible($x, $y / $z); 
} 
  
// Driver Code 
$x = 18; 
$y = 12; 
if (isDivisible($x, $y)) 
    echo "Yes"; 
else
    echo "No"; 
  
// This code is contributed by Sam007 
?>

