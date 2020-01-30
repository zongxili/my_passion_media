<?php


$inputArr = array(8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6); 
// sort the array


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