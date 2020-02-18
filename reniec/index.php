<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Consulta Reniec</title>

<script src="js/jquery.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

		<style type="text/css">
			h1{
				margin:0px;
				padding:0px;
			}
			

		</style>
</head>

<body>
<div class="container">
			<h1 class="text-center p-3"></h1>
				<div class="card border-info">
					<div class="card-header bg-info text-center text-light">
						CONSULTA DEL DNI
					</div>	
	
					<form method="post">
					<div class="card-body">
						<input type="text"  id="dni" name="dni" class="form-control" placeholder="Ingrese DNI" pattern="([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])" autofocus>
					</div>
					<div class="card-footer text-center">
						<button id="botoncito" class="btn btn-success"  class="botoncito"> <i class="fa fa-search"></i> Buscar </button>
					</div>
					</form>
				</div>
<br>

				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel">
						<div class="card border-info" id="home">
							<div class="card-body">
								<table class="table table-striped">
									<tbody id="tbody">
									
<table class="table table-striped" >
<tr >
  <td ><strong>DNI  </strong></td>
  <td ><strong>NOMBRES  </strong></td>
  <td ><strong>APELLIDO PATERNO </strong></td>
  <td  ><strong>APELLIDO MATERNO</strong></td>
</tr>

<tr>
  <td><span id="mostrar_dni"></span></td>
  <td><span id="paterno"></span></td>
  <td><span id="materno"></span></td>
  <td><span id="nombres"></span></td>
</tr>
</table>									
									

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="json" role="tabpanel">
						<div class="card border-success">
							<div class="card-body">
								<pre id="json_code">

								</pre>
							</div>
						</div>
					</div>
				</div>


</div>
</div>
<script>
$(function(){
	$('#botoncito').on('click', function(){
		var dni = $('#dni').val();
		var url = 'consulta_reniec.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dni='+dni,
		success: function(datos_dni){
			var datos = eval(datos_dni);
				$('#mostrar_dni').text(datos[0]);
				$('#paterno').text(datos[1]);
				$('#materno').text(datos[2]);
				$('#nombres').text(datos[3]);
		}
	});
	return false;
	});
});
</script>

</body>
</html>