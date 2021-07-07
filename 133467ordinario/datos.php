<?php
session_start();// variable de sesion
if (!isset($_SESSION['nombre'])) {
	header('location: login.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['nombre'];
	$idusuario=$_SESSION['id'];
}

?>
<html>

<head>

<title>Factura </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body>
<div class = "banner">
    
    <img src="banner.png">
</div>
<?php   




$fecha = $_POST["fecha"];
$tipo = $_POST["tipo"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$descuento = $_POST["descuento"];

$totalventa = $precio * $cantidad;
$totalventa= $totalventa - (($totalventa/100) * $descuento);






echo "
<div class=\"contenedor\">


<div class=\"barranavegacion\">
<div>
<a href=\"index.php\">Home</a></br>
</div>
<div>
<a href=\"ventasdia.php\">Ventas por día </a></br>
</div>

<div>
<a href=\"ventastotales.php\">Ventas totales </a></br>
</div>

        <div><a href=\"cerrar.php\"> Cerrar Sesion </a> </div>
        
</div>
<div class=\"detallesfactura\">";


echo "<label>Fecha : ".$fecha."<br></label>";
echo "<label>Tipo: ".$tipo."<br></label>";
echo "<label>Precio : ".$precio."<br></label>";
echo "<label>Cantidad : ".$cantidad." litros<br></label>";
echo "<label>Descuento : ".$descuento." %<br></label>";

echo "</div>
<h1> Total a pagar: $".$totalventa." pesos </h1>
</div>";


$servername= "localhost";
$database= "133467ordinario";
$username= "root";
$password= "";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } 



$sql= "INSERT INTO ventas  (id,fecha,tipo,precio,cantidad,descuento,total)
VALUES (0,'$fecha','$tipo','$precio','$cantidad','$descuento','$totalventa') ";
if (mysqli_query($conn,$sql)){
    // echo "registro exitoso";
} else {
    echo "Error al registrar"."<br>".mysqli_error($conn);
}
mysqli_close($conn);


?>
<div class= "detallesventa"><strong>Alumno:</strong> Benjamín Joaquín Martinez
           <strong> Matricula:</strong> 133467</Strong>
        </div>

</body>

</html>