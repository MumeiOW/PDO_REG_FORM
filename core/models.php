<?php 

require_once 'dbconfig.php';

function insertIntoGameDev($pdo,$first_name, $last_name, $home_address, $position, $team_name, $projects_handled, $date_of_hiring) {

	$sql = "INSERT INTO game_devs (first_name,last_name, home_address, position, team_name, projects_handled, date_of_hiring) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $home_address, $position, $team_name, $projects_handled, $date_of_hiring]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllDevRecords($pdo) {
	$sql = "SELECT * FROM game_devs";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getDevByID($pdo, $dev_id) {
	$sql = "SELECT * FROM game_devs WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$dev_id])) {
		return $stmt->fetch();
	}
}

function updateGameDev($pdo,$first_name, $last_name, $home_address, $position, $team_name, $projects_handled, $date_of_hiring) {

	$sql = "UPDATE game_devs 
				SET first_name = ?, 
					last_name = ?, 
					home_address = ?, 
					position = ?, 
					team_name = ?, 
					projects_handled = ?, 
					date_of_hiring = ? 
			WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $home_address, $position, $team_name, $projects_handled, $date_of_hiring]);

	if ($executeQuery) {
		return true;
	}
}



function deleteDev($pdo, $dev_id) {

	$sql = "DELETE FROM game_devs WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$dev_id]);

	if ($executeQuery) {
		return true;
	}

}




?>