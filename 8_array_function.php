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

echo "<br>";
echo"======================================================";
echo "<br>";

$name = array("heni","rajesh","priti");
$result = array_reverse($name);
print_r($result);

echo "<br>";
echo"======================================================";
echo "<br>";

$num1= array(50,90,30,10,20,30.50);
echo array_sum($num1);

echo "<br>";
echo"======================================================";
echo "<br>";

$num1= array(50,90,30,10,"ram",30.50);
echo array_sum($num1);

echo "<br>";
echo"======================================================";
echo "<br>";

$car = array("BMW","maruti","audi");
$string = implode("-",$car);
echo $string;

echo "<br>";
echo"======================================================";
echo "<br>";

$pizza = "pieces1 pieces2 pieces3 pieces4";
$array = explode(" ",$pizza);
print_r($array);

echo "<br>";
echo"======================================================";
echo "<br>";

$rank = array("fIrsT"=>1,"SecOnd"=>2,"ThiRD"=>3);
print_r(array_change_key_case($rank,CASE_UPPER));

echo "<br>";
echo"======================================================";
echo "<br>";

$rank = array("fIrsT"=>1,"SecOnd"=>2,"ThiRD"=>3);

if(array_key_exists("first",$rank))
{
    echo "key found";   
}
else
{
    echo "key not found";
}
echo "<br>";
echo"======================================================";
echo "<br>";
$cars = array("BMW","Thar","Audi");
array_unshift($cars,"i20");
print_r($cars);
echo "<br>";
echo"======================================================";
echo "<br>";


echo rand(10,60);
?>