<?php
$cn = new mysqli('localhost', 'root', '', 'matrimonial');
$qry = "SELECT id, name, email, gender, height, weight FROM users WHERE height >= ? and height <= ?";
$stmt = $cn->prepare($qry);
$minHeight = 170;
$maxHeight = 177;
// i = integer, d = double, s = string, b = blob
$stmt->bind_param('ii', $minHeight, $maxHeight); // direct values can not be passed in bind_param function, because it accepts references to the variables
$stmt->execute();
$rs = $stmt->get_result(); // get_result function is used to get the result set from a prepared statement
?>
<table border="1" cellpadding="5" cellspacing="0">
	<thead style="text-align:left">
		<th>Id</th>
		<th>Name</th>
		<th>Email Address</th>
		<th>Gender</th>
		<th>Height</th>
		<th>Weight</th>
	</thead>
	<tbody>
<?php
$a = 1;
echo '<tr><td colspan="6">Fetch Enumerated Array fetch_row()</td></tr>';
while($user = $rs->fetch_row()) {
	if($a++ % 5 == 0)
		break;
?>
			<tr>
				<td><?= $user[0] ?></td>
				<td><?= $user[1] ?></td>
				<td><?= $user[2] ?></td>
				<td><?= $user[3] ?></td>
				<td><?= $user[4] ?></td>
				<td><?= $user[5] ?></td>
			</tr>
<?php
}
echo '<tr><td colspan="6">Fetch Enumerated and Associative Array fetch_array()</td></tr>';
while($user = $rs->fetch_array()) {
	if($a++ % 5 == 0)
		break;
?>
			<tr>
				<td><?= $user[0] ?></td>
				<td><?= $user['name'] ?></td>
				<td><?= $user[2] ?></td>
				<td><?= $user['gender'] ?></td>
				<td><?= $user[4] ?></td>
				<td><?= $user['weight'] ?></td>
			</tr>
<?php
}
echo '<tr><td colspan="6">Fetch Associative Array fetch_assoc()</td></tr>';
while($user = $rs->fetch_assoc()) {
	if($a++ % 5 == 0)
		break;
?>
			<tr>
				<td><?= $user['id'] ?></td>
				<td><?= $user['name'] ?></td>
				<td><?= $user['email'] ?></td>
				<td><?= $user['gender'] ?></td>
				<td><?= $user['height'] ?></td>
				<td><?= $user['weight'] ?></td>
			</tr>
<?php
}
?>
	</tbody>
</table>
