<?php
$cn = mysqli_connect('localhost', 'root', '', 'matrimonial');
$qry = "SELECT * FROM users LIMIT 10";
$rs = mysqli_query($cn, $qry);
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
		<?php while($user = mysqli_fetch_object($rs)) { ?>
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
