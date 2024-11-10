<?php require_once 'core/dbconfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getDevById = getDevById($pdo, $_GET['dev_id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getDevById['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getDevById['last_name']; ?>">
		</p>
		<p>
			<label for="homeAddress">Home Address</label>
			<input type="text" name="homeAddress" value="<?php echo $getDevById['home_address']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getDevById['position']; ?>">
		</p>
		<p>
			<label for="teamName">Team Name</label>
			<input type="text" name="teamName" value="<?php echo $getDevById['team_name']; ?>">
		</p>
		<p>
			<label for="adviser">Projects Handled</label>
			<input type="text" name="adviser" value="<?php echo $getDevById['projects_handled']; ?>"></p>
		<p>
			<label for="dateOfHiring">Date of Hiring</label>
			<input type="text" name="dateOfHiring" value="<?php echo $getDevById['date_of_hiring']; ?>">
			<input type="submit" name="editDevBtn">
		</p>
	</form>
</body>
</html>