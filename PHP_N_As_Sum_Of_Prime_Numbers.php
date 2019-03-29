//N expressed as sum of 4 prime numbers

<?php 
// PHP program to express  
// n as sum of 4 primes. 
$a = 0; 
$b = 0; 
  
// funcion to check if a  
// number is prime or not 
function isPrime($x) 
{ 
      
// does square root  
// of the number 
$s = (int)(sqrt($x)); 
  
// traverse from 2 to sqrt(n) 
for ($i = 2; $i <= $s; $i++) 
  
// if any divisor found 
// then non prime 
if ($x % $i == 0) 
return 0; 
  
// if no divisor is found 
// then it is a prime 
return 1; 
} 
  
function Num($x) 
{ 
global $a; 
global $b; 
  
// iterates to check  
// prime or not 
for ($i = 2;  
     $i <= (int)($x / 2); $i++) 
{ 
  
// calls function to check 
// if i and x-i is prime 
// or not 
if (isPrime($i) != 0 &&  
    isPrime($x - $i) != 0) 
    { 
    $a = $i; 
    $b = $x - $i; 
      
    // if two prime numbers 
    // are found, then return 
    return; 
    } 
} 
} 
  
// function to generate 4 prime 
// numbers adding upto n 
function generate($n) 
{ 
global $a; 
global $b; 
  
// if n<=7 then 4 numbers cannot 
// sum to get that number 
if ($n <= 7) 
    echo "Impossible to form"; 
  
// if it is not even then 2 and 
// 3 are first two of sequence 
if ($n % 2 != 0)  
{ 
    // calls the function to get 
    // the other two prime numbers 
    // considering first two primes 
    // as 2 and 3 (Note 2 + 3 = 5) 
    Num($n - 5); 
  
    // print 2 and 3 as the firsts 
    // two prime and a and b as the 
    // last two. 
    echo "2 3 $a $b"; 
} 
  
// if it is even then 2 and 2 are 
// first two of sequence 
else 
{ 
    // calls the function to get 
    // the other two prime numbers 
    // considering first two primes 
    // as 2 and 2 (Note 2 + 2 = 4) 
    Num($n - 4); 
  
    // print 2 and 2 as the firsts 
    // two prime and a and b as the 
    // last two. 
    echo "2 2 $a $b";      
} 
} 
  
// Driver Code 
$n = 28; 
generate($n); 
  
// This code is contributed by mits. 
?>
