<?php

define("file","file.txt");
echo file;

//header("location:1_demo.php");

foreach($_SERVER as $key=>$value)
{
    echo "$key as $value"."<br>";
}

?>