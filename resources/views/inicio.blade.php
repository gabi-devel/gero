<!DOCTYPE html>
<html>
<head>
	<title>Botones para redirigir</title>
	<!-- Incluye los archivos CSS de Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Selecciona una opción:</h1>
		<button class="btn btn-primary" onclick="location.href='{{route('calendario')}}'">Calendario</button>
		<button class="btn btn-primary" onclick="location.href='{{route('carreras')}}'">Carreras</button>
	</div>
	<!-- Incluye los archivos JS de Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
