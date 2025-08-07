<?php

    $person = array("Ayushiba",21,52.23,true);
    print_r($person);
    echo "<br>";
    echo $person[1]."<br>";
    $student= array();
    $student[]="rajan";
    $student[]="rajan@gmail.com";
    $student[]=21;
    print_r($student);
    unset($student[0]);
    echo "<br>";
    print_r($student);
?>