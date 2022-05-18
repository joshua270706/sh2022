<!-- Hecho por Josue Regalo - Segundo año Vespertino -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Usuario dado de alta
	</title>
</head>
<body bgcolor="white">
	<h1 align="center">Alta de estudiantes</h1>
	<?php
		$conexion = mysqli_connect("localhost", "root", "", "base1") or
			die("Problemas con la conexion");

		mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values
								('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
			or die("Problemas en el select". mysqli_error($conexion));

			mysqli_close($conexion);
			echo "<center>El estudiante fue dado de alta</center>";
	?>
	<br>
	<center>
		<img src="../img/usuario.png" width="150px" height="150px">
	</center>
</body>
</html>