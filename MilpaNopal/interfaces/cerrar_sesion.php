<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cerrar Sesión</title>
</head>
<body>
	<h1>Sesión Cerrada, Adios.</h1>
	<?php
		session_unset();//Remueve las variables de Sesión
		session_destroy();//Destruye la sessión
		header('Location:../login/login.php');
	?>
</body>
</html>