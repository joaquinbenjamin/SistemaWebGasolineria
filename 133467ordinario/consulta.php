<html>

<head>
<title> Cachando datos del formulario</title>
<link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body >


 
<div class="consulta">



<?php   




$servername= "localhost";
$database= "133467ordinario";
$username= "root";
$password= "";



$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } echo "<div>Conexion Exitosa.........";



 echo 'Conectado a la base de datos.<br>';

 //me devuelve un array 
 //$fecha='2021-01-16';
 //$fecha="CURRENT_DATE";
 $fecha="";
 $fecha= $_POST["fecha"];
 $fecha= "'".$fecha."'";

 if( $fecha=="''"){ $fecha="CURRENT_DATE";}
 echo $fecha;
  $result = $conn->query("SELECT *  FROM ventas WHERE fecha = $fecha");

  echo "Numero de resultados: $result->num_rows <br></div>";


 echo "<div class=\"consulta\"> <table>
  <tr>
    <td><strong>Id</strong></td>
    <td><strong>Fecha</strong></td>
    <td><strong>Tipo</strong></td>
    <td><strong>Precio</strong></td>
    <td><strong>Cantidad</strong></td>
    <td><strong>Descuento</strong></td>
    <td><strong>Total</strong></td>
  </tr>";

$total=0.0;

  foreach ($result as $row) {
    $total= $total + $row['total'];

echo "
    <tr>
    <td>".$row['id']."</td>
    <td>".$row['fecha']."</td>
    <td>".$row['tipo']."</td>
    <td>$".$row['precio']."</td>
    <td>".$row['cantidad']." litros</td>
    <td>".$row['descuento']." %</td>
    <td>$".$row['total']."</td>
  </tr> 
  ";
   
   
        
}

echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td>
<td>
total = $".$total."
</td></tr></table></div>";


             $result->close();

             $conn->close();
             echo "</div >";
?>






</body>