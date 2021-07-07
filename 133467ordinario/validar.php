<?php
	session_start();// Esta funcion siempre tiene que ir al principio
	include_once('conexion.php');// invoca al archivo conexion.php

	$us = $_POST['usuario']; // son los valores que envio desde el teclado
	$pw = $_POST['clave'];

$qry = "SELECT * FROM usuarios WHERE usuario = '".$us."' AND password ='".$pw."'";

	$resultado = mysqli_query($conn,$qry);

	if ($reg=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

		$_SESSION['nombre']=$reg["nombre"];// despues del =, es lo que esta en la BD
		$_SESSION['id']=$reg["id"];
		$_SESSION['ap']=$reg["apellidos"];

		echo "<script>location.href='index.php';</script>";//es un redireccionamiento automatico a la pagina linkeado
	}
	else{
		echo "<script>alert('Clave o Usuario Incorrecto');</script>";
		echo "<script>location.href='login.php';</script>";
	}

 ?>
