
<?php 
// PHP program to check if given number is Emirp or not. 
// An Emirp Number (prime spelled backwards) is a prime number that results in a different prime when its decimal digits are reversed. 
// This definition excludes the related palindromic primes.
  
// The program returns true if n is prime else false 
  
function isPrime($n) 
{ 
    // Corner case 
    if ($n <= 1) 
        return -1; 
  
    // Check from 2 to n-1 
    for ($i = 2; $i < $n; $i++) 
        if ($n % $i == 0) 
            return -1; 
  
    return 1; 
} 
  
// Function will check  
// whether number is 
// Emirp or not 
function isEmirp($n) 
{ 
    // Check if n is prime 
    if (isPrime($n) == -1) 
        return -1; 
  
    // Find reverse of n 
    $rev = 0; 
    while ($n != 0) 
    { 
        $d = $n % 10; 
        $rev = $rev * 10 + $d; 
        $n /= 10; 
    } 
          
    // If both Original and  
    // Reverse are Prime,  
    // then it is an Emirp number 
    return isPrime($rev); 
} 
  
// Driver code 
$n = 13;  
  
if (isEmirp($n) ==-1) 
    echo "Yes"; 
    else
    echo "No"; 
  
// This code is contributed by ajit 
?>
