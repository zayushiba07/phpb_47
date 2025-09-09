<?php
$cn = new mysqli('localhost', 'root', '', 'matrimonial');
$qry = "SELECT * FROM users WHERE height >= ? and height <= ?";
$stmt = $cn->prepare($qry);
$minHeight = 170;
$maxHeight = 177;
// i = integer, d = double, s = string, b = blob
$stmt->bind_param('ss', $minHeight, $maxHeight); // direct values can not be passed in bind_param function, because it accepts references to the variables
$stmt->execute();
$rs = $stmt->get_result(); // get_result function is used to get the result set from a prepared statement
?>
<p>Total Rows: <?= $rs->num_rows ?></p>
<p>Fields: <pre><?php print_r($rs->fetch_fields()) ?></pre></p>
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
