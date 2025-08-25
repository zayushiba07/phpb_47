<?php

try
{
    $no1 = 0;
    $no2 = 20;
    $total = $no1/$no2;
    if($no1 == 0 || $no2 == 0)
    {
        throw new exception("not divide by zero");
    }
    echo "{$no1}divide by {$no2}"."<br>";
    echo "total is :".$total."<br>";
}
catch(exception $e)
{
    $fileerror =  $e->getMessage();
    echo $fileerror;
    $filename = "error.log";
    $datetime = date("d-m-Y h:i:s");
    $message = "\n$filename have error $fileerror $datetime";
    $fileopen = fopen($filename,'a');
    $filewrite=fprintf($fileopen,$message);
    fclose($fileopen);
}

?>