<?php

$employee = array("id"=>101,"name"=>"rakesh","salary"=>20000,"age"=>45,"gender"=>true);
echo $employee["age"];
echo "<br>";
print_r($employee);
echo "<br>";
$book["name"]="php";
$book["price"]=450;
$book["isbn"]=456321;
$book["author"]="xyz";
print_r($book);
echo "<br>";
unset($employee["id"]);
print_r($employee);

foreach($book as $b)
{
    echo"<br>";
    echo $b;
}

foreach($employee as $key=>$value)
{
    echo"<br>";
    echo "$key as $value";
}
?>