<?php
$cn = new mysqli('localhost', 'root', '', 'matrimonial');
if ($cn->connect_error) {
	die("Connection failed: " . $cn->connect_error);
}
$qry = "SELECT * FROM users LIMIT 10";
$rs = $cn->query($qry);
$recs = $rs->fetch_all(MYSQLI_ASSOC);
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
<?php for($a = 0; $a < count($recs); $a++) { ?>
			<tr>
				<td><?= $recs[$a]['id'] ?></td>
				<td><?= $recs[$a]['name'] ?></td>
				<td><?= $recs[$a]['email'] ?></td>
				<td><?= $recs[$a]['gender'] ?></td>
				<td><?= $recs[$a]['height'] ?></td>
				<td><?= $recs[$a]['weight'] ?></td>
			</tr>
<?php } ?>
	</tbody>
</table>
