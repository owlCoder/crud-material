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
      <link rel="stylesheet" href="css/extra.css" />
   </head>
   
   <body>
		<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" method="POST" action="db.php">
					<span class="login100-form-title p-b-43">
						CRUD Material
					</span>
					
					
					<div class="wrap-input100" required>
						<input class="input100" type="text" name="dbHost">
						<span class="focus-input100"></span>
						<span class="label-input100">Adresa baze podataka</span>
					</div>
					
					<div class="wrap-input100" required>
						<input class="input100" type="text" name="dbName">
						<span class="focus-input100"></span>
						<span class="label-input100">Naziv baze podataka</span>
					</div>
					
					<div class="wrap-input100" required>
						<input class="input100" type="text" name="user">
						<span class="focus-input100"></span>
						<span class="label-input100">Korisničko ime</span>
					</div>
					
					
					<div class="wrap-input100">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Lozinka</span>
					</div>
					
					<div class="container-login100-form-btn pt-3">
						<button type="submit" class="login100-form-btn" style="font-size: 15px;">
							PRIJAVI SE NA SISTEM
						</button>
					</div>
					
					

					<h6 class="pt-5 text-center">&copy; 2020 <b>CRUD Material</b> <br/>
					Podrži projekte otvorenog koda <a style="font-size: 15px;" href="https://github.com/owlCoder">GitHub</a></h6>	
				</form>

				<div class="login100-more" style="background-image: url('img/bg.gif');">
				</div>
				
				
			</div>
		</div>
	</div>
	
		
   </body>
   <script src="js/bootstrap.bundle.min.js" />
   <script src="js/bootstrap.esm.min.js" />
   <script src="js/bootstrap.min.js" />
   </html>