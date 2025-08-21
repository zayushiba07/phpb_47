<?php

date_default_timezone_set("asia/kolkata");

echo time();
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("24-03-2004");
echo "<br>";
echo strtotime("+10 week");


$birthdate = strtotime("24-03-2004");
$currentdate = strtotime("now");

$difference = $currentdate - $birthdate;

echo "difference of seconds : " . $difference . "<br>";
echo "difference of minutes : " . ($difference / 60) . "<br>";
echo "difference of hours   : " . ($difference / (60 * 60)) . "<br>";
echo "difference of days    : " . ($difference / (60 * 60 * 24)) . "<br>";
echo "difference of years   : " . floor($difference / (60 * 60 * 24 * 365)) . "<br>";

echo "<br>";


$day   = date("d");
$month = date("m");
$year  = date("Y");


$open  = mktime(10, 0, 0, $month, $day, $year);  // 10:00 AM
$close = mktime(23, 0, 0, $month, $day, $year);  // 5:00 PM


$now = time();


if ($now >= $open && $now <= $close) {
    echo "We are OPEN!";
} else {
    echo "We are CLOSED!";
}

?>

