<?php

$number = array(80,90,50,30,10,5,3);
$number1 = array(80,90,100,120,130,140);

$num=array_merge($number,$number1);
print_r($num);
echo "<br>";
echo"======================================================";
echo "<br>";
sort($number);
print_r($number);
echo "<br>";
echo"======================================================";
echo "<br>";
$person = array("name"=>"ajay","age"=>21,"weight"=>52.23,"marks"=>89,"skill"=>"php","email"=>"ajay@gmail.com","xyz"=>"bhavyaa");
asort($person);
print_r($person);
echo "<br>";
echo"======================================================";
echo "<br>";

$info = array("rajesh","software",20000);
list($name,$job,$salary)=$info;

echo "$name have job $job and . his salary is $salary";
echo "<br>";
echo"======================================================";
echo "<br>";

$cars = array("BMW","Thar","Audi");
array_push($cars,"i20");
print_r($cars);
echo "<br>";
echo"======================================================";
echo "<br>";

$cars1 = array_pop($cars);
print_r($cars1);
echo "<br>";
echo"======================================================";
echo "<br>";
$cars1 = array_pop($cars);
print_r($cars1);
echo "<br>";
echo"======================================================";
echo "<br>";
print_r($cars);
?>