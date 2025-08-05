<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         <?php
        $date = date("d-m-y");
        echo $date;
        $color = "skyblue";
    ?>
    </title>
</head>
<body bgcolor="<?php  echo $color;?>">
    
<?php
    $name = "the easy learn";
    $age = 21;
    $weight = 52.32;
    
    echo "My name is :".$name."<br>";
    echo "My age is :".$age."<br>";
    echo "My weight is :".$weight."<br>";
?>

</body>
</html>