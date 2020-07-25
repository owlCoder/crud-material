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
   </head>
   <body class="animsition">
      <!-- MAIN CONTENT-->
      <div class="main-content" style="min-height: 100vh !important; padding-top: 10px !important;">
         <div class="section__content section__content--p30">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card" style="border: 1px #fff solid; border-radius: 25px;">
                        <div class="card-header">
                           <strong>Kreiranje</strong>
                           <small> Nove Tabele</small>
                        </div>
                        <div class="card-body card-block">
                           <form name="add_name" id="add_name">
                              <div class="table-responsive">
                                 <table class="table pb-3" id="dynamic_field">
                                    <tr>
                                       <td style="border-top: 0px #fff solid !important;">
                                          <input type="text" name="nazivTabele" placeholder="Unesite naziv tabele koju bi da kreirate" class="form-control" />
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style="border-top: 0px #fff solid !important;"><input type="text" name="1" placeholder="Unesite naziv, tip podatka kolone koju kreirate" class="form-control" /></td>
                                       <td style="border-top: 0px #fff solid !important;"><button type="button" name="add" id="add" class="btn btn-success blokiraj">Još jedna kolona</button>
                                       &emsp;<button type="button" name="last" id="last" class="btn btn-warning text-white poslKol">Poslednja kolona</button></td>
                                    </tr>
					
                                 </table>
                                 
                              </div>
							  <tr>
							 
							  </tr>
                           </form>
                        </div>
                     </div>
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
      <script>  
         $(document).ready(function(){  
              var i=1;  
              $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row'+i+'"><td style="border-top: 0px #fff solid !important;"><div class="form-group"><input type="text" id="'+i+'" name="'+i+'" class="form-control" placeholder="Kolona2 TipPodatka(Dužina)"></div></td></tr>');  
              });  
			  $('#last').click(function(){  
				   $('.blokiraj').prop('disabled', true);
				   $('.poslKol').prop('disabled', true);
                   i++;  
                   $('#dynamic_field').append('<tr id="row'+i+'"><td style="border-top: 0px #fff solid !important;"><div class="form-group"><input type="text" id="'+i+'" name="'+i+'" class="form-control" placeholder="Kolona2 TipPodatka(Dužina)"></div></td><td style="border-top: 0px #fff solid !important;"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Ukloni kolonu</button></td></tr>');  
				   $('#dynamic_field').append('<tr id="sendData"><td style="border-top: 0px #fff solid !important;"><input type="button" name="submit" id="submit" class="btn btn-info" value="Kreiranje tabele" /></td></tr>');
			  });  
              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row'+button_id+'').remove();  
				   i--;
				   $('.blokiraj').prop('disabled', false);
				   $('.poslKol').prop('disabled', false);
				   $('#sendData').remove();
              });    
         });  
      </script>
   </body>
</html>