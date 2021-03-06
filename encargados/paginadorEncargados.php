<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Paginación de encargados </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	
	
  </head>
  <body>

  	<!-- Inicio del menu -->
  <nav>
      <div class="logo">Nombre de Escuela</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="../principal.php">Inicio</a></li>
        <li><a href="#">Salir</a></li>
      </ul>
    </nav>
  <!-- fin del menu -->
   <center>
    <div class="container-fluid">
	  <div class="row">
		<div class="col-xs-12">
		<h3> Listado de Encargados </h3>
		<div id="loader" class="text-center"> <img src="loader.gif"></div>
		<div class="outer_div"></div><!-- Datos ajax Final -->
		</div>
	  </div>
	</div>
   </center>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	
  </body>
</html>
<center>
	<script>
	$(document).ready(function(){
		load(1);
	});

	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'encargados_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
</script>
</center>