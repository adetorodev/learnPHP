<?php
declare(strict_types=1);
# Function
// function functionName(list of parameters) {
//     //code to be executed;
//     //return statements, if any
// }

// function displayGreeting($name, $message="Have a good day"){
//     echo "Hello $name, $message";
// }

// displayGreeting("Jane");

// function addNumbers($num1, $num2, $num3){
//     // echo 'Hello';
//     return $num1 + $num2 + $num3;
//     echo 'Hello';
// }
// echo addNumbers(2,4,5);
// echo addNumbers('9', '6', '1');
function addTwoNums($a, $b): int {
    return $a + $b;
}
echo '<BR>'.addTwoNums(3, 1);
echo '<BR>'.addTwoNums(3.9, 1);
?>
