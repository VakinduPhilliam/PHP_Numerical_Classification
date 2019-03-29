//Check if a number is Armstrong
//Given a number, we need to check whether it is an armstrong number or not in PHP. 
//An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.

<?php 

// PHP code to check wether a number is  
// armstrong number or not 
  
// function to check whether the number is  
// armstrong number or not 

function armstrongCheck($number){ 
    $sum = 0;   
    $x = $number;   
    while($x != 0)   
    {   
        $rem = $x % 10;   
        $sum = $sum + $rem*$rem*$rem;   
        $x = $x / 10;   
    }   
      

    // if true then armstrong number 

    if ($number == $sum) 
        return 1; 
      
    // not an armstrong number     

    return 0;     
} 
  
// Driver Code 

$number = 407; 
$flag = armstrongCheck($number); 
if ($flag == 1) 
    echo "Yes"; 
else
    echo "No"
?>
