<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 
 session_start();

$databaseHost     = $_POST["dbHost"];
$databaseName     = $_POST["dbName"];
$databaseUsername = $_POST["user"];
$databasePassword = $_POST["pass"];

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli != false) {
	$_SESSION["podatak"] = $databaseUsername;
    header('Location: redok.php');
    exit;
}
else
	header('Location: rednot.php');

	