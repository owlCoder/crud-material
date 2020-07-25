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
	  <title>CRUD Material | Dashboard</title>
      <link rel="icon" href="img/fav.png" />
     
    <link href="dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="dashboard/css/theme.css" rel="stylesheet" media="all">
	
	<script>
            function uri(url) {
                document.getElementById('sredina').src = url;
            }
      </script>
	  
	 
</head>

<body class="animsition">
    <div>
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
<center>
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard.php" style="color: #fff;">
                           CRUD Material
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
					</center>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow animsition" href="#" onclick="uri('dashboard/uvod.php');">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li>
                            <a href="#" onclick="uri('dashboard/kreirTabelu.php');">
                                <i class="fa fa-table"></i>Kreiranje tabele</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                     
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block"> <center> 
            <div class="logo">
              <a href="dashboard.php" style="color: #fff;">
                    CRUD Material
                </a>
            </div>
			</center>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow animsition" href="#" onclick="uri('dashboard/uvod.php');">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="#" onclick="uri('dashboard/kreirTabelu.php');">
                                <i class="fa fa-table"></i>Kreiranje tabele</a>
                        </li>
                        <li>
                            <a href="#" onclick="uri('dashboard/prikazTabele.php');">
                                <i class="fas fa-table"></i>Prikaz tabele</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header">
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="dashboard/images/user.webp" alt="User" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["podatak"]; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="dashboard/images/user.webp" alt="User" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION["podatak"]; ?></a>
                                                    </h5>
                                                    <span class="email">CRUD User Account</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
					
					<div class="embed-responsive embed-responsive-21by9">

					<iframe class="animsition visinaAdapt" src="dashboard/uvod.php" id="sredina" width="100%;" style="border: 0;"></iframe>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="dashboard/vendor/slick/slick.min.js">
    </script>
    <script src="dashboard/vendor/wow/wow.min.js"></script>
    <script src="dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="dashboard/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="dashboard/js/main.js"></script>
	
		<script type="text/javascript" language="javascript"> 
			$('.embed-responsive').css('height', $(window).height()+'px');
		</script>

</body>

</html>