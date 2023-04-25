<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
	<title>Listado de carreras aleatorias</title>
</head>
<body>
	<h1>Listado de carreras</h1>

	@php
    $carreras = [
        "Ingeniería de Sistemas",
        "Ingeniería Industrial",
        "Ingeniería Civil",
        "Ingeniería Ambiental",
        "Ingeniería Mecánica",
        "Ingeniería Eléctrica",
        "Ingeniería Química",
        "Ingeniería Electrónica",
        "Ingeniería de Telecomunicaciones",
        "Ingeniería de Software"
    ];
	@endphp
	<ul id="carreras">
		@foreach ($carreras as $index => $carrera)
			<li><a href="{{ route('carrera', $index) }}">{{ $carrera }}</a></li>
		@endforeach
	</ul>
</body>
</html>
