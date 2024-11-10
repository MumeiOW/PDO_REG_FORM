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
	<h3>Welcome to the Game Developer Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="homeAddress">Home Address</label> <input type="text" name="homeAddress"></p>
		<p><label for="position">Position</label> <input type="text" name="position"></p>
		<p><label for="teamName">Team Name</label> <input type="text" name="teamName"></p>
		<p><label for="projectsHandled">Projects Handled</label> <input type="text" name="projectsHandled"></p>
		<p><label for="dateOfHiring">Date of Hiring</label> <input type="text" name="dateOfHiring">
			<input type="submit" name="insertNewDevBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Developer ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Home Address</th>
	    <th>Position</th>
	    <th>Team Name</th>
	    <th>Projects Handled</th>
	    <th>Date of Hiring</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllDevRecords = seeAllDevRecords($pdo); ?>
	  <?php foreach ($seeAllDevRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['dev_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['home_address']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['team_name']; ?></td>
	  	<td><?php echo $row['projects_handled']; ?></td>
	  	<td><?php echo $row['date_of_hiring']; ?></td>
	  	<td>
	  		<a href="editdev.php?dev_id=<?php echo $row['dev_id'];?>">Edit</a>
	  		<a href="deletedev.php?dev_id=<?php echo $row['dev_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>