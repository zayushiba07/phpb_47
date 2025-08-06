<?php

    if(isset($_POST['submit']))
    {
        $result=0;
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $rchoice = $_POST['operation'];
        switch($rchoice)
        {
            case 'add':
                $result = $num1+$num2;
                echo "Addition is :".$result;
                break;
            case 'sub':
                $result = $num1 - $num2;
                echo "Subtraction is :".$result;
                break;
            case 'mul':
                $result = $num1 * $num2;
                echo "Multiplaction is :".$result;
                break;
            case 'div':
                $result = $num1 / $num2;
                echo "Division is :".$result;
                break;
        }
    }
?>