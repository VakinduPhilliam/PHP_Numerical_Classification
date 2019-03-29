//Program to check if N is a Pentagonal Number
//Pentagonal numbers are numbers which can be arranged to form a pentagon. 
//If N is a pentagonal number then we can use N dots or points to generate a regular pentagon.

<?php 
// PHP program to check 
// pentagonal numbers. 
  
// Function to determine 
// if N is pentagonal or not. 
function isPentagonal(int $N)  
{ 
    $i = 1;  
    $M; 
      
    do { 
  
        // Substitute values of i 
        // in the formula. 
        $M = (3 * $i * $i - $i) / 2; 
        $i += 1; 
    } 
    while ($M < $N); 
      
    return ($M == $N); 
} 
  
    // Driver Code 
    $N = 12; 
      
    if (isPentagonal($N))  
        echo $N , " is pentagonal " ;  
    else
        echo $N ," is not pentagonal" ; 
      
// This code is contributed by anuj_67. 
?>
