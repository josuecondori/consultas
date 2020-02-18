<!DOCTYPE html>
<html lang="es">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name = "viewport" content = "initial-scale = 1.0, user-scalable = no,  width=device-width">
		<title>Consulta de RUC SUNAT sin Captcha Perú</title>
		<meta name="description" content="Consulta de Ruc SUNAT Perú sin captcha, descarga este codigo desde demos.geekdev.ml"/>
		<meta name="keywords" content="buscar ruc, consultar ruc peru, api rest consulta ruc peru, ruc perú, consulta ruc sin captcha, ruc sunat 2017"/>
		<meta property="og:locale" content="es_PE" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Consulta de RUC SUNAT sin Captcha Perú - GeekDev" />
		<meta property="og:description" content="Consulta de Ruc SUNAT Perú sin captcha, descarga este codigo desde demos.geekdev.ml" />
		<meta property="og:image" content="https://drive.google.com/uc?id=0BxTe_c1GIOkoaFpkZlNrR0tta0E&export=view" />
		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
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

					<div class="card-footer text-center">
						<button onclick="window.location.href='sunat/'" type="submit" class="btn btn-success" name="btn-submit" id="btn-submit">
							<i class="fa fa-search"></i> CONSULTA SUNAT
						</button>
					</div>
				
					<div class="card-footer text-center">
						<button onclick="window.location.href='reniec/'" type="submit" class="btn btn-success" name="btn-submit" id="btn-submit">
							<i class="fa fa-search"></i> CONSULTA DNI
						</button>
					</div>

			<div class="mx-auto text-center pt-2">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- ads_Content -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-9492853452655822"
					 data-ad-slot="0854297903"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>

			<div style="display:none" class="result">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#home" data-toggle="tab" role="tab">Respuesta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#json" data-toggle="tab" role="tab">Json</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel">
						<div class="card border-info" id="home">
							<div class="card-body">
								<table class="table table-striped">
									<tbody id="tbody">
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="json" role="tabpanel">
						<div class="card border-success">
							<div class="card-body">
								<pre id="json_code">
									Json code
								</pre>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="display:none" class="alert alert-danger" role="alert" id="error">
			</div>
			<footer class="footer text-center">
				<div class="col">
					<p><small>&copy; 2020 Josue Condori - Derechos Reservados</small></p>
				</div>
			</footer>
		</div>

	</body>
</html>

