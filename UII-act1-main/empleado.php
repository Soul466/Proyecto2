<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>39 Luis Carlos Portillo Jr</title>
    
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/logo4.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
				<li><a href="index.php">Inicio</a></li>
					<li><a href="empleado.php">Empleado</a></li>
					<li><a href="Usuario.php">Usuario</a></li>
					<li><a href="Citas.php">Ventas</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleados:</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Nuestros empleados han sido calificados por profesionales entrenados en las mejores escuelas
                    de conduccion en el estado
                    </p>
					<br/>
					<p> Si eres uno de nuestros empleados aqui puedes registrarte</p>
					<br/>.
					<form action="/action_page.php" method="get">
                        <label for="fname">Nombre de Usuario:</label>
                        <input type="text" id="fname" name="fname"><br><br>
						<label for="fname">E-Mail:</label>
                        <input type="text" id="fname" name="fname"><br><br>
						<label for="fname">Fecha de nacimiento:</label>
                        <input type="text" id="fname" name="fname"><br><br>
                        <label for="lname">Contraseña:</label>
                        <input type="text" id="lname" name="lname"><br><br>
						<label for="fname">Confirmar Contraseña:</label>
                        <input type="text" id="fname" name="fname"><br><br>
						
                        <input type="submit" value="Submit">
                      </form>
			</div>

			<aside>
				<div class="widget">
					<h3>Secciones e informacion!</h3>
					<ul>
						<li><a href="#">Tabla 1 Empleado</a></li>
						<li><a href="#">Tabla 2 Usuario</a></li>
						<li><a href="#">Tabla 3 Agenda una cita </a></li>
						<li><a href="#">Tabla 4 informacion de contacto</a></li>
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> No lista 39 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p>https://github.com/Soul466 </p>
		</div>
	</footer>
</body>
</html>