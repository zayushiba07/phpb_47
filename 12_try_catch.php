<?php
    try
    {
        $age = 17;
        if($age<=18)
        {
           throw new Exception("not eligible"."<br>");
        }
        echo "eligble"."<br>";

    }
    catch(exception $e)
    {
        echo "Error :".$e->getMessage();
    }
    finally
    {
        echo "done !!";
    }
?>