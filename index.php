<?php

// include_once 'include/heading.html';
// include_once 'include/heading.html';


// echo 'Today is Friday, we\'re going to the zoo.';
// header('Location: http://example.com');
// As the names suggest, the include_once and require_once
// statements only “copy and paste” the code into the file once
// Constants, Variables, Data Types
// and Operators
// define ('BASIC_NUMBER', 849586586);
// echo BASIC_NUMBER

// $x = 7;
// echo $x;

// var_dump($x); // to verify the data type of a variable
# Type Casting
# $p = (int)4.6;
# echo var_dump($p);
// $x += 5;
// echo $x;

// $p = 3;
// echo $p;
// echo ++$p;

#String
// $msg = 'Hello';
// $areacode = "(208)";
// $contact = '+1' . $areacode . '1234567';
// echo '<BR>'.$contact;
// $str1 = 'Good Day!';
// echo '<BR>'.strlen($str1);
// $str2 = 'Hello World';
// $str3 = strtolower($str2);
// $str4 = strtoupper($str2);
// echo '<BR>'.$str2;
// echo '<BR>'.$str3;
// echo '<BR>'.$str4;
// echo date('d-M-Y', strtotime("+ 10 hours"));

// $secondArr = array(11, 16, 4, 9, 12);
// echo $secondArr[3];
// $assocArr = array(
//     'Peter' => 11,
//     'Jane' => 16,
//     'Paul' => 12
//     );
// echo $assocArr['Paul'];
// Array can be use to store string
// $fruitArr = array('Apple', 'Banana', 'Coconut');
// echo $fruitArr[1];

// $myArray = array(2, 5.1, 'PHP', 105);
// var_dump($myArray);
// print_r($myArray)

// $addDemo = array(1, 5, 3, 9);
// $addDemo[] = 7;
// print_r($addDemo);

// $addDemoAssoc = array('Peter'=>20, 'Jane'=>15);
// $addDemoAssoc['James'] = 17;
// print_r($addDemoAssoc);

// $colors = array("red", "black", "pink", "white");
// array_splice($colors, 2);
// print_r($colors);

$indexArrDemo = array(11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A'=>12, 'B'=>5, 'C'=>20);
echo array_search(5, $indexArrDemo).'<BR>';
echo array_search(20, $assocArrDemo).'<BR>';
var_dump(array_search('B', $assocArrDemo));
?>