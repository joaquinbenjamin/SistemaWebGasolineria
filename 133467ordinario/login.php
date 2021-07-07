
<!DOCTYPE html>
<html>

<head>
    <title>Inicio de sesion</title>
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
      
        </div>
        <form action="validar.php"  class="form-area" method="POST">

        <h1>Control de venta de gasolina</h1>

     

      

            <div class="detallesventa" >
            
            <label>
			Usuario:
		</label>
		<input type="text" name="usuario">
		<br>
		<label>
			Password:
		</label>
		<input type="text" name="clave">
		<br><br>
		<input type="submit" name="entrar" value="Ingresar al Sistema">
              
            </div>
          
        </form>
        <div class= "detallesventa"><strong>Alumno:</strong> Benjamín Joaquín Martinez
           <strong> Matricula:</strong> 133467</Strong>
        </div>
    </div>



    
</body>


</html>