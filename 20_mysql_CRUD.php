<?php
$db = new mysqli('localhost', 'root', '', 'matrimonial');
$user = new stdClass();

if($_SERVER['REQUEST_METHOD'] == 'GET') {
	if(isset($_GET['edit'])) {
		$qry = "SELECT id, name, email, gender, date_of_birth, phone, user_occupation, education, height, weight FROM users WHERE id = ?";
		$stmt = $db->prepare($qry);
		$stmt->bind_param('i', $_GET['edit']);
		$stmt->execute();
		$rs = $stmt->get_result();
		$user = $rs->fetch_object();
	}
	elseif(isset($_GET['delete'])) {
		$qry = "DELETE FROM users WHERE id = ?";
		$stmt = $db->prepare($qry);
		$stmt->bind_param('i', $_GET['delete']);
		$stmt->execute();

		if($stmt->affected_rows > 0) {
			echo '<p style="color: green; text-align: center">User deleted successfully</p>';
		}
		else {
			echo '<p style="color: red; text-align: center">Error deleting user: ' . $stmt->error . '</p>';
		}
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$qry = "INSERT INTO users (name, email, password, gender, date_of_birth, phone, user_occupation, height, weight) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $db->prepare($qry);
	$stmt->bind_param('sssssssii', $_POST['name'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['gender'], $_POST['date_of_birth'], $_POST['phone'], $_POST['user_occupation'], $_POST['height'], $_POST['weight']);
	$stmt->execute();

	if($stmt->affected_rows > 0) {
		echo '<p style="color: green; text-align: center">User added successfully</p>';
	}
	else {
		echo '<p style="color: red; text-align: center">Error adding user: ' . $stmt->error . '</p>';
	}
}
?>
<style>
form th { text-align: right; }
</style>
<form method="<?= isset($_GET['edit']) ? 'PUT' : 'POST' ?>">
	<table cellpadding=6 cellspacing=0 style="margin:auto">
		<tr>
			<th><label for="name">Name</label></th>
			<td><input name="name" id="name" maxlength="255" value="<?= $user->name ?>" required></td>
		</tr>
		<tr>
			<th><label for="email">Email Address</label></th>
			<td><input type="email" name="email" id="email" maxlength="255" value="<?= $user->email ?>" required></td>
		</tr>
		<tr>
			<th><label for="password">Password</label></th>
			<td><input type="password" name="password" id="password" required></td>
		</tr>
		<tr>
			<th><label>Gender</label></th>
			<td>
				<label><input type=radio name="gender" value="Male" <?= $user->gender == 'Male' ? 'checked' : ''?>> Male</label>
				<label><input type=radio name="gender" value="Female" <?= $user->gender == 'Female' ? 'checked' : ''?>> Female</label>
			</td>
		</tr>
		<tr>
			<th><label for="date_of_birth">Date of Birth</label></th>
			<td><input type="date" name="date_of_birth" id="date_of_birth" maxlength="255" value="<?= $user->date_of_birth ?>" required></td>
		</tr>
		<tr>
			<th><label for="phone">Phone Number</label></th>
			<td><input type="tel" name="phone" id="phone" maxlength="255" value="<?= $user->phone ?>"></td>
		</tr>
		<tr>
			<th><label for="user_occupation">Occupation</label></th>
			<td><input name="user_occupation" id="user_occupation" maxlength="255" value="<?= $user->user_occupation ?>"></td>
		</tr>
		<tr>
			<th><label for="education">Education</label></th>
			<td>
				<select name="education" id="education">
					<option <?= $user->education == '< 10' ? 'selected' : ''?>>&lt; 10</option>
					<option <?= $user->education == '< 12' ? 'selected' : ''?>>&lt; 12</option>
					<option <?= $user->education == '12th Arts' ? 'selected' : ''?>>12th Arts</option>
					<option <?= $user->education == '12th Commerce' ? 'selected' : ''?>>12th Commerce</option>
					<option <?= $user->education == '12th Science' ? 'selected' : ''?>>12th Science</option>
					<option <?= $user->education == 'Diploma/ITI' ? 'selected' : ''?>>Diploma/ITI</option>
					<option <?= $user->education == 'Graduate' ? 'selected' : ''?>>Graduate</option>
					<option <?= $user->education == 'Post-graduate' ? 'selected' : ''?>>Post-graduate</option>
					<option <?= $user->education == 'Doctorate' ? 'selected' : ''?>>Doctorate</option>
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="height">Height</label></th>
			<td><input type="number" name="height" id="height" min="60" max="213" value="<?= $user->height ?>"></td>
		</tr>
		<tr>
			<th><label for="weight">Weight</label></th>
			<td><input type="number" name="weight" id="weight" min="30" max="300" value="<?= $user->weight ?>"></td>
		</tr>
		<tr>
			<td colspan=2 style="text-align: center">
				<button><?= isset($_GET['edit']) ? 'Update' : 'Insert' ?></button>
			</td>
		</tr>
	</table>
</form>

<table border=1 cellpadding=6 cellspacing=0 style="margin:auto; margin-top: 20px">
	<thead style="text-align:left">
		<th>Name</th>
		<th>Email Address</th>
		<th>Gender</th>
		<th>Date of Birth</th>
		<th>Phone Number</th>
		<th>Occupation</th>
		<th>Education</th>
		<th>Height</th>
		<th>Weight</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
<?php
$qry = "SELECT id, name, email, gender, date_of_birth, phone, user_occupation, education, height, weight FROM users";
$rs = $db->query($qry);
while($user = $rs->fetch_object()) {
?>
		<tr>
			<td><?= $user->name ?></td>
			<td><?= $user->email ?></td>
			<td><?= $user->gender ?></td>
			<td><?= $user->date_of_birth ?></td>
			<td><?= $user->phone ?></td>
			<td><?= $user->user_occupation ?></td>
			<td><?= $user->education ?></td>
			<td><?= $user->height ?></td>
			<td><?= $user->weight ?></td>
			<td><a href="?edit=<?= $user->id ?>">Edit</a></td>
			<td><a href="?delete=<?= $user->id ?>" onclick="if(confirm('Are you sure to delete?')) return true; return false;">Delete</a></td>
		</tr>
<?php
}
?>
