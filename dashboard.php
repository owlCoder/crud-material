<?php
session_start();

if (!isset($_SESSION["podatak"])) {
    header("location: index.php");
}
else {
	// ukljuci db.php, i pripremi sve za upite nad  bazom
}
?>

<!DOCTYPE html>
<html lang="rs">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
      <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
      <link rel="stylesheet" href="css/bootstrap-utilities.min.css" />
</head>

<body>

    <div>
        <a href="logout.php">Logout</a>
    </div>

    This is a sample content on page-1. This page content is only available for login users.
    <br>
    

</body>

</html>