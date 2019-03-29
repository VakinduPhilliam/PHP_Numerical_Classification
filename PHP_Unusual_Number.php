<?php 

// PHP Program to check Unusual number  
//An unusual number is a natural number whose greatest prime factor is strictly greater than square root of n.

//Utility function to find largest prime factor of a number  

function largestPrimeFactor($n)  
{  
    // Initialize the maximum prime factor  
    // variable with the lowest one  
    $max = -1;  
    
    // Print the number of 2s that divide n  
    while ($n % 2 == 0) {  
        $max = 2;  
        $n >>= 1; // equivalent to n /= 2  
    }  
    
    // n must be odd at this point, thus skip  
    // the even numbers and iterate only for  
    // odd integers  
    for ($i = 3; $i <= sqrt($n); $i += 2) {  
        while ($n % $i == 0) {  
            $max = $i;  
            $n = $n / $i;  
        }  
    }  
    
    // This condition is to handle the case  
    // when n is a prime number greater than 2  
    if ($n > 2)  
        $max = $n;  
    
    return $max;  
}  
    
// Function to check Unusual number  
function checkUnusual($n)  
{  
    // Get the largest Prime Factor  
    // of the number  
    $factor = largestPrimeFactor($n);  
    
    // Check if largest prime factor 
    // is greater than sqrt(n)  
    if ($factor > sqrt($n)) {  
        return true;  
    }  
    else {  
        return false;  
    }  
}  
    
// Driver Code   
$n = 14;  
  
if (checkUnusual($n)) {  
    echo "YES"."\n";  
}  
else {  
    echo "NO"."\n";  
}  
// This code is contributed  
// by Harshit Saini  
?>
