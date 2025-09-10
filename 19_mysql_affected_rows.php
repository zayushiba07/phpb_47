<?php
$cn = new mysqli('localhost', 'root', '', 'matrimonial');

/*
$qry = "UPDATE admins SET password = '123456' WHERE id % 2 = 0";
$rs = $cn->query($qry);
echo 'Rows Updated: ' . $cn->affected_rows;
*/

/*
$qry = "DELETE FROM admins WHERE id % 2 = 1";
$rs = $cn->query($qry);
echo 'Rows Deleted: ' . $cn->affected_rows;
*/

$qry = "INSERT INTO admins VALUES (null, 'Rakesh', 'qwerty')";
$rs = $cn->query($qry);
echo 'Id of the Inserted Row: ' . $cn->insert_id;
