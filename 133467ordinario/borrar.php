
<?php   


$id = $_POST["idregistro"];


$servername= "localhost";
$database= "133467ordinario";
$username= "root";
$password= "";



$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } 




$sql=  " DELETE FROM ventas WHERE id= '$id' ";

if (mysqli_query($conn,$sql)){
    echo "<script>location.href='ventastotales.php';</script>";//es un redireccionamiento automatico a la pagina linkeado
} else {
    
    echo "<script>alert('Error al borrar el registro');</script>";
}
mysqli_close($conn);
?>
