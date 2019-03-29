//Identify Perfect Numbers
//A perfect number is a number if it is equal to the sum of its factors, that is original number is 
//equal to sum of all its factors excluding the number itself.

<?php 

// Function to check if a number is perfect 

function isPerfectNumber($N) 
{ 

    // To store the sum 

    $sum = 0;        

    // Traversing through each number 
    // In the range [1,N) 

    for ($i = 1; $i < $N; $i++) 
    { 
        if ($N % $i == 0) 
        { 
            $sum = $sum + $i; 
        }       
    } 

    // returns True is sum is equal 
    // to the original number. 

    return $sum == $N; 

} 

// Driver's code 

$N = 6; 
if (isPerfectNumber($N)) 
    echo " Perfect Number"; 
else
    echo "Not  Perfect Number"; 
?>

