<?php

$coures = array(
    array("sub"=>"php","duration"=>90,"fees"=>15000),
    array("sub"=>"nodejs","duration"=>90,"fees"=>20000),
    array("sub"=>"html","duration"=>90,"fees"=>7000),
    array("sub"=>"javascript","duration"=>90,"fees"=>8000)
);

print_r($coures);
echo "<br>";
$size = sizeof($coures);
echo $size;

$position = 0;
$total=0;

while($position<$size)
{
    echo "<br>";
    print_r($coures[$position]);
    foreach($coures[$position] as $key=>$value)
    {
        echo "<br>";
        echo "$key as $value";
        if($key=="fees")
        {
            $total+=$value;
        }
        
    }
    echo "<br>";
    echo "==========================================";
    echo "<br>";
    $position++;
}
echo "total is :".$total;

?>