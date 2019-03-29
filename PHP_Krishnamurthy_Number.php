// A Krishnamurthy number is a number whose sum of the factorial of digits is equal to the number itself.

<?php 
// PHP program to check if a number 
// is a krishnamurthy number 
  
// Function to find Factorial  
// of any number 
function factorial($n) 
{ 
    $fact = 1; 
    while($n != 0) 
    { 
        $fact = $fact * $n; 
        $n--; 
    } 
      
    return $fact; 
} 
  
// function to Check if number 
// is krishnamurthy 
function isKrishnamurthyNumber($n) 
{ 
    $sum = 0; 
      
    // Storing the value in 
    // other variable 
    $temp = $n; 
      
    while($temp != 0) 
    { 
        // calculate factorial of last digit 
        // of temp and add it to sum 
        $sum = $sum + factorial($temp % 10); 
          
        // Integer Division 
        // replace value of temp by temp/10 
        $temp = intdiv($temp, 10); 
    } 
      
    // Check if number is krishnamurthy 
    return $sum == $n; 
} 
  
// Driver code 
$n = 145; 
  
if (isKrishnamurthyNumber($n)) 
    echo "YES"; 
else
    echo "NO"; 
  
  
// This code is contributed by akash7981 
?>

