<?php

//Array reverse
/*
function reverseNumber($input){
    for($i=count($input)-1; $i>=0; $i--){
        print_r($input[$i]);
    }
}
reverseNumber(34);
*/


//Declaring variable to give input in Terminal
$input = (int)readline("Enter the number:");

//Function declaring
function reversingNumber($input){
    //Decaring variable to initalize 
    $reverse = 0;
    //While loop declaring condition as greater than 1 index
    while($input>1){
        $reverse = $reverse * 10 + $input % 10;
        $input = $input/10;
    }
    return $reverse;
};
$output = reversingNumber($input);
echo ("Your input $input was reversed now the value is: ".$output);



?>