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
    echo "<br>";

    $str = "                                                   Ayushiba Zala";
    echo "<pre>".$str."</pre><br/>";
    echo  "<pre>".ltrim($str)."</pre><br/>";

    echo "<br>";

    $str = "Ayushiba Zala           ";
    echo "<pre>".$str."****sdfdd</pre><br/>";
    echo  "<pre>".rtrim($str)."****sbsvb</pre><br/>";

    echo "<br>";

    $str = "                                                   Ayushiba Zala            ";
    echo "<pre>".$str."</pre><br/>";
    echo  "<pre>".trim($str)."</pre><br/>";

    echo "<br>";

    echo "<br>";

    $str = "Ayushiba Zala";
    echo str_pad($str,20,"3",STR_PAD_BOTH);
    echo "<br>";

    echo str_repeat("$",20);
     echo "<br>";

    $sentance = "we should daily eat pizza, sandwitch and burger and drink cocacola";
    $bad_word = array("pizza","sandwitch","burger","cocacola");
    $good_word=array("apple","banana","mango","cocount Water");
    echo $sentance."<br>";
    $repalce = str_replace($bad_word,$good_word,$sentance);
    echo  $repalce."<br>";


    print_r(str_split("abcdefghijklmnopqrstuvwxyz",3));

    echo "<br>";
    if(strcmp("banana","apple")>0)
    {
        echo "string1 is greater than string2";
    }
    else
    {
        echo "both are not greater than string2";
    }

    echo "<br>";

    $pra = "Success in life does not come overnight; it is the result of hard work, dedication, and patience. Every individual faces challenges, but those who continue to move forward without giving up are the ones who achieve their dreams. Hard work builds confidence and creates opportunities that talent alone cannot guarantee.";

    $break = wordwrap($pra,50,"<br>");
    echo $break;
    echo "<br>";
    echo substr("abcdef",0);
    echo "<br>";
    echo substr("abcdef",1,13);
?>