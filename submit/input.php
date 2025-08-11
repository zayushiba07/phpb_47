<?php
    if(!isset($_POST['submit']))
    {
       echo "submit is not work properly..";
    }
    elseif(empty($_POST['amount']) || empty($_POST['year']) || empty($_POST['rate']))
    {
        echo "your input is empty.please fill up your input...";
    }
    elseif(!is_numeric($_POST['amount']) || !is_numeric($_POST['year']) ||!is_numeric($_POST['rate']))
    {
        echo "please enter number . not alphabets...";
    }
    else
    {
         extract($_POST);
        $si = ($amount*$year*$rate)/100;
        echo $si;
    }
?>