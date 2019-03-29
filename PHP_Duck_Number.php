//Check whether a number is Duck Number or not
//A Duck number is a number which has zeroes present in it, but there should be no zero present in the beginning of the number.

<?php 
// PHP Program to check whether  
// a number is Duck Number or not. 
  
// Function to check whether  
// given number is duck number or not. 

function check_duck( $num) 
{ 
    // Length of the number 
    // (number of digits) 
    $len = strlen($num);  
    $count_zero = 0 ;  
      
    for($i = 1; $i < $len ;$i++) 
    { 
        // Checking for a digit  
        // whether it is a '0' or not 
        $ch = $num[$i];  
        if($ch == '0') 
            $count_zero++; 
    } 
  
    return $count_zero ; 
} 
  
// Driver Code 

$num1 = "1023";  
  
// Extracting the first digit 

$first_digit1 = $num1[0];  
  
if( check_duck($num1) > 0 &&  
    $first_digit1 != '0') 
    echo "It is a duck number\n"; 
else
    echo"It is not a duck number\n"; 
  
// This code is contributed by Sam007 

?>

