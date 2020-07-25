<!DOCTYPE html>
<html lang="rs">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>CRUD Material | Dashboard</title>
      <link rel="icon" href="img/fav.png" />
      <link href="css/font-face.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
      <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
      <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
      <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
      <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
      <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
      <link href="css/theme.css" rel="stylesheet" media="all">
	  
	  <style>
	  ::-webkit-scrollbar {
  width: 0px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: transparent; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: transparent; 
}
</style>

   </head>
   <body class="animsition">
      <!-- MAIN CONTENT-->
      <div class="main-content" style="min-height: 100vh !important; padding-top: 10px !important;">
         <div class="section__content section__content--p30">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <?php 
					 session_start();
 
					$mysqli = new mysqli($_SESSION["adresa"],$_SESSION["korIme"] , $_SESSION["lozinka"], $_SESSION["baza"]); 
					
					$query = "SELECT *FROM korisnik";

					$result = $mysqli->query($query);

					while($row = $result->fetch_array()){
						echo $row['ime'] . PHP_EOL;
					}

					$mysqli-> close();
					?>
                  </div>
               </div>
            </div>
		
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
         </div>
      </div>
      <!-- Jquery JS-->
      <script src="vendor/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap JS-->
      <script src="vendor/bootstrap-4.1/popper.min.js"></script>
      <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
      <!-- Vendor JS       -->
      <script src="vendor/slick/slick.min.js"></script>
      <script src="vendor/wow/wow.min.js"></script>
      <script src="vendor/animsition/animsition.min.js"></script>
      <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
      <script src="vendor/counter-up/jquery.counterup.min.js"></script>
      <script src="vendor/circle-progress/circle-progress.min.js"></script>
      <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="vendor/chartjs/Chart.bundle.min.js"></script>
      <script src="vendor/select2/select2.min.js"></script>
      <!-- Main JS-->
      <script src="js/main.js"></script>
   </body>
</html>