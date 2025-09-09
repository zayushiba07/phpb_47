<?php
$cn = new mysqli('localhost', 'root', '', 'matrimonial');
if ($cn->connect_error) {
	die("Connection failed: " . $cn->connect_error);
}
$qry = "SELECT * FROM users WHERE gender = 'Male' LIMIT 10";
$rs = $cn->query($qry);
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
		<?php while($user = $rs->fetch_object()) { ?>
			<tr>
				<td><?= $user->id ?></td>
				<td><?= $user->name ?></td>
				<td><?= $user->email ?></td>
				<td><?= $user->gender ?></td>
				<td><?= $user->height ?></td>
				<td><?= $user->weight ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
