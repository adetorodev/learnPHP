<?php
// $x = 5;
// $y = '5';
// if($x == $y){
//     echo 'Yes';
// }
// if($x === $y){
//     echo 'Yes';
// }else {
//     echo 'No';
// }

// $a = (7 == 4 ? 'Yes' : 'No');
// echo $a;

// $b = 20;
// switch($b){
//     case 10:
//         echo "Chocolate <BR>";
//         echo "it is 10";
//         break;
//     case 20:
//         echo "Brownish <BR>";
//         break;
//     case 7:
//         echo "Yelowish <BR>";
//         break;
//     default:
//         echo "None of the above <BR>";
// }

// for (initial value; test condition; modification to
// value)
// {
// //Do Some Task
// }

// for ($c = 1; $c < 5; ++$c){
//     echo 'The value of $c is '.$c.'<BR>';
// }


// foreach ($array as $value) {
//     //code to be executed;
// }
// foreach ($array as $key=>$value) {
//     //code to be executed;
// }

// $arr1 = array(11, 12, 13, 14, 15);
// foreach ($arr1 as $num){
//     echo 'The number is '.$num.'<BR>';
// }

// $arr2 = array('Aaron'=>12, 'Ben'=>23, 'Carol'=>35);
// foreach ($arr2 as $name=>$age){
//     echo $name.' is '.$age.' years old.<BR>';
// }

// while (condition is true)
// {
// //do A
// }

// $d = 1;

// while ($d < 5)
// {

//     echo 'The value of $d is '.$d.'<BR>';

//     $d++;
// }

// do {
//     //some tasks
// } while (condition is true);

// $e = 100;
// do {
//     echo 'The value is '.$e;
//     $e++;
// }while ($e < 0)


for ($i = 0; $i < 6; ++$i)
{
    echo '$i = '.$i.', ';
    if ($i == 4)
        continue;
    echo 'First.';
    echo 'Second.<BR>';
}
?>