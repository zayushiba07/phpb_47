<?php

    $file = 'person.txt';
    $file_open = fopen($file,'w');
    $detail = "\nright fdrgfgdfg";
    $fwrite = fprintf($file_open,$detail);
    fclose($file_open);
    echo "file created...";
echo "<br>";

    $str = "jeel patel";
    $age = 16;
    $weight = 45.23566;
    $string = sprintf("hello , my name is %s,and age is %d,and weight is %.2f",$str,$age,$weight);
    echo $string;
?>