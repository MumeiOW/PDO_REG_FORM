<?php 

require_once 'dbconfig.php';
require_once 'models.php';

if(isset($_POST['insertNewDevBtn'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $homeAddress = trim($_POST['homeAddress']);
    $position = trim($_POST['position']);
    $teamName = trim($_POST['teamName']);
    $projectsHandled = trim($_POST['projectsHandled']);
    $dateOfHiring = trim($_POST['dateOfHiring']);

    if (!empty($firstName) && !empty($lastName) && !empty($homeAddress) && !empty($position) && !empty($teamName) && !empty($projectsHandled) && !empty($dateOfHiring)) {
        $query = insertIntoGameDev($pdo, $firstName, $lastName, $homeAddress, $position, $teamName, $projectsHandled, $dateOfHiring);

          
        if ($query) {
            header("Location: ../index.php");
        }

        else {
            echo "Insertion Failed";
        }
    }

    else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editDevBtn'])) {
    $dev_id = $_GET['dev_id'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $homeAddress = trim($_POST['homeAddress']);
    $position = trim($_POST['position']);
    $teamName = trim($_POST['teamName']);
    $projectsHandled = trim($_POST['projectsHandled']);
    $dateOfHiring = trim($_POST['dateOfHiring']);

    if (!empty($dev_id) && !empty($firstName) && !empty($lastName) && !empty($homeAddress) && !empty($position) && !empty($teamName) && !empty($projectsHandled) && !empty($dateOfHiring)) {
        $query = updateGameDev($pdo, $dev_id, $firstName, $lastName, $homeAddress, $position, $teamName, $projectsHandled, $dateOfHiring);

        if ($query) {
            header("Location: ../index.php");
        }

        else {
            echo "Update Failed";
        }
    }

    else{
        echo "Make Sure that no fields are empty";
    }

}

if (isset($_POST['deleteDevBtn'])) {

    $query = deleteDev($pdo, $_GET['dev_id']);

    if ($query) {
        header("Location: ../index.php");
    }

    else {
        echo "Deletion Failed";
    }
}

?>