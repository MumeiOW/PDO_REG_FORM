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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getDevById = getDevById($pdo, $_GET['dev_id']); ?>
	<form action="core/handleForms.php?dev_id=<?php echo $_GET['dev_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getDevtById['first_name']; ?></p>
			<p>Last Name: <?php echo $getDevById['last_name']; ?></p>
			<p>Home Address: <?php echo $getDevById['home_address']; ?></p>
			<p>Position: <?php echo $getDevById['position']; ?></p>
			<p>Team Name: <?php echo $getDevById['team_name']; ?></p>
			<p>Projects Handled: <?php echo $getDevById['projects_handled']; ?></p>
			<p>Date of Hiring: <?php echo $getDevById['date_of_hiring']; ?></p>
			<input type="submit" name="deleteDevBtn" value="Delete">
		</div>
	</form>
</body>
</html>