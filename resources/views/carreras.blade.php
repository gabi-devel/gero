<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
	<title>Listado de carreras aleatorias</title>
</head>
<body>
	<h1>Listado de carreras aleatorias</h1>
	<ul id="carreras">
		<!-- Aquí se agregarán las carreras generadas por JavaScript -->
	</ul>

	<script>
		// Crea una lista de carreras
		var carreras = [
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

		// Genera una lista aleatoria de carreras
		var carrerasAleatorias = [];
		while (carrerasAleatorias.length < 5) {
			var carreraAleatoria = carreras[Math.floor(Math.random() * carreras.length)];
			if (!carrerasAleatorias.includes(carreraAleatoria)) {
				carrerasAleatorias.push(carreraAleatoria);
			}
		}

		// Agrega las carreras aleatorias a la lista HTML
		var listaCarreras = document.getElementById("carreras");
		carrerasAleatorias.forEach(function(carrera) {
			var itemLista = document.createElement("li");
			itemLista.innerText = carrera;
			listaCarreras.appendChild(itemLista);
		});
	</script>
</body>
</html>
