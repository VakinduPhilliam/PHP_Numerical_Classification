<? Php 

// PHP code to check if a number can be expressed as 2^x + 2^y 
  
// Utility function to check if a number is power of 2 or not 

function isPowerOfTwo($n) 
{ 
    return ($n and !($n & ($n - 1))); 
} 
  
// Utility function to determine the value of previous power of 2 

function previousPowerOfTwo($n) 
{ 
    while ($n & $n - 1) 
    { 
        $n = $n & $n - 1; 
    } 
    return $n; 
} 
  
// function to check if n can be expressed as 2^x + 2^y or not 
function checkSum($n) 
{ 
    // if value of n is 0 or 1 
    // it can not be expressed  
    // as 2^x + 2^y 
    if ($n == 0 or $n == 1)  
    return false; 
  
    // if a number is power of 2 
    // then it can be expressed  
    // as 2^x + 2^y 
    else if (isPowerOfTwo($n))  
    { 
        echo " " , $n / 2 , " " , $n / 2; 
        return true; 
    } 
  
    else 
    { 
        // if the remainder after 
        // subtracting previous power  
        // of 2 is also a power of 2  
        // then it can be expressed  
        // as 2^x + 2^y 
        $x = previousPowerOfTwo($n); 
        $y = $n - $x; 
        if (isPowerOfTwo($y))  
        { 
            echo $x, " ", $y; 
            return true; 
        } 
    } 
  
    return false; 
} 
  
// Driver code 
$n1 = 20; 
if (checkSum($n1) == false) 
    echo "No"; 
echo"\n"; 
  
$n2 = 11; 
if (checkSum($n2) == false) 
    echo "No"; 
      
// This code is contributed  
// by chandan_jnu. 
?>
