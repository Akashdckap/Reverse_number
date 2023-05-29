<?php
// $ReverseNumberByString = (string)readline("Enter the number : ");
// echo strrev($ReverseNumberByString);

// This is the method by swaping the last value in front to reverse the number. We can also reverse the decimal value.

$getNumber = (int)readline("Enter the number : ");
function reversDigits($getNumber) {
    $reverseNumber = 0;
    while($getNumber > 1) {
        $reverseNumber = $reverseNumber * 10 + $getNumber % 10;
        $getNumber = (int)$getNumber / 10;
    }
    return $reverseNumber;
}

echo "Original number is : ".$getNumber;
echo "\n";
echo "Reverse of number is ", reversDigits($getNumber);
echo "\n";