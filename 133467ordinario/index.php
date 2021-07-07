<?php
session_start();// variable de sesion
if (!isset($_SESSION['nombre'])) {
	header('location: login.php');// tambien hace un direccionamiento hacia una pagina.
}else{
	$usuacrioactivo=$_SESSION['nombre'];
	$idusuario=$_SESSION['id'];
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Gasolinerias VIP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body>
    <div class = "banner">
    
        <img src="banner.png">
    </div>

    <div class="contenedor">

        
        <div class="barranavegacion">
            <div>
            <a href="index.php">Home</a></br>
        </div>
        <div>
            <a href="ventasdia.php">Ventas por día </a></br>
        </div>

        <div>
            <a href="ventastotales.php">Ventas totales </a></br>
        </div>
        <div><a href="cerrar.php"> Cerrar Sesion </a> </div>
        </div>
        <form action="datos.php"  class="form-area" method="POST">

        <h1>Control de venta de gasolina</h1>

        <?php   




$servername= "localhost";
$database= "133467ordinario";
$username= "root";
$password= "";



$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
//  die ("Conexion fallida....".mysqli_connect_error());

 } 
 $result = $conn->query("SELECT * FROM precios");



 $rawdata = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row['precio'];
        $i++;
    }
$magna = $rawdata[0];
$premium= $rawdata[1];

echo "
<INPUT type=\"hidden\" name=\"SessionID\" id='inicial' value='".$magna."'>
<script type=\"text/javascript\">

// funcion que se ejecuta cada vez que se selecciona una opción


function cambioOpciones()

{
  
   
   if(document.getElementById('opciones').value==\"magna\") 
   document.getElementById('showId').value='".$magna."';

   if(document.getElementById('opciones').value==\"premium\") 
   document.getElementById('showId').value='".$premium."';

  
   

}

</script>";


 
 $result->close();

 $conn->close();
 ?>


      

            <div class="detallesventa" >
            

               <div>

               
                <label for "fecha"> Fecha</label>
                <input type="date" name="fecha" required>
               
               
               <label for "tipo"> Tipo</label>
               <SELECT name="tipo" size="1" id='opciones' onchange='cambioOpciones();'>
              
                <OPTION  selected="true" value="magna">Magna</OPTION>
                <OPTION value= "premium">Premium</OPTION>
                    </SELECT>
               
                    </div>
                <label for="precio" > Precio</label>
                <?php
                echo "<input type=\"text\" name=\"precio\" id='showId'  readonly=\"readonly\"   value =$magna required>";

               ?>

                    <div>
                    
                <label for="cantidad"> Cantidad: </label>
                <!-- <input type="text" name="cantidad" required> -->
                <input type="number" name="cantidad" id="numero" min="0" max="100" required>
                <label for="litros"> litros</label>
                </div>
                <div>
                <label for="descuento"> Descuento </label>
              

                <SELECT name="descuento" size="1" >
                   
                    <OPTION selected="true" value="0">0 %</OPTION>
                    <OPTION  value="10">10 %</OPTION>
                    <OPTION  value="20">20 %</OPTION>
                    
                        </SELECT>
                </div>
               
                <div>
                <INPUT type="reset" value="Cancelar ">
                <INPUT type="submit" value="Pagar">
                </div>
                
               
            </div>

          
        </form>
        
        

   
    </div>

 
    <div class= "detallesventa"><strong>Alumno:</strong> Benjamín Joaquín Martinez
           <strong> Matricula:</strong> 133467</Strong>
        </div>

</div>
      
</body>


</html>