<!DOCTYPE html>
<html>
<head>
	<title>Botones para redirigir</title>
	<!-- Incluye los archivos CSS de Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
        <div class="row">
            <h4 class="bg-light border-top py-2">Calendario Académico</h4>
            <h4>Inicio y finalización de Cursada por Cuatrimestres</h4>
            <a href="{{route('calendario')}}" class="mb-3">
                <button class="btn btn-primary">Calendario</button>
            </a>
         
            <h4 class="bg-light border-top py-2">Carreras</h4>
            <h4>Oferta Académica 2023</h4>
            <a href="{{route('carreras')}}">
                <button class="btn btn-primary">Carreras</button>
            </a>
        </div>

	<!-- Incluye los archivos JS de Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
