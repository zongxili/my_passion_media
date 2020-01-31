<?php

/* 
Pseudo code:

1. Sort the intput array.

2. Create 2 empty arrays as answers, also make a flag.

3. Inside the input array, make a for loop which checks 2 elements per round: 

  3.1 Check the flag: if it is positive, then dispatch the 1st element in the input array to the 1st array and Dispatch 2nd element to 2nd array. Finally turn the Flag to negative and move to next 2 elements in the input array.

  3.2 Check the flag: if it is negative, then dispatch the 1st element to the 2nd array and Dispatch 1st element to 2nd array. Finally turn the Flag to positive.

*/

$inputArr = array(8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6); 

// create 2 empty answer arrays and a flag
rsort($inputArr);

$ansArrayOne = array();

$ansArrayTwo = array();

print_r($inputArr);

$flag = 1;

// take the first one to the 1st array 
for ($i = 0; $i < count($inputArr); $i = $i +2) {
  if ($flag === 1) {
    array_push($ansArrayOne, $inputArr[$i]);
    if ($inputArr[$i + 1]) array_push($ansArrayTwo, $inputArr[$i + 1]);
    $flag = $flag * -1;
  } else {
    array_push($ansArrayTwo, $inputArr[$i]);
    if ($inputArr[$i + 1]) array_push($ansArrayOne, $inputArr[$i + 1]);
    $flag = $flag * -1;
    }
}

print_r($ansArrayOne);

?>