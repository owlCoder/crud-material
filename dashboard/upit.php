 <?php 
					 session_start();
 
					$mysqli = new mysqli($_SESSION["adresa"],$_SESSION["korIme"] , $_SESSION["lozinka"], $_SESSION["baza"]); 
					
					$query = $_POST["naredba"];

					$result = $mysqli->query($query);
					
					
					while($row = mysqli_fetch_array($result)) {
    echo print_r($row) . "\n" . PHP_EOL;       // Print the entire row data
}

					$mysqli-> close();
					?>