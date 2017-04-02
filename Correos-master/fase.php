<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Restablecer Contraseña</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	</head>
<center><img src="images/portade.png" alt="..."></center>
 

	<body >
        <div class="wrap">
            <header>
                Este Correo es automático no se necesita el campo correo
            </header>
            
           <section id="principal">
				<form id="formulario" method="post" action="php/fase.php" enctype="multipart/form-data">
					<div class="campos">			
						<label>Ingrese su correo</label>
						<input type="email" name="email" required>
								
					<input id="submit" type="submit" name="enviar" value="Enviar mail">
				</form>
				
			</section> 
		</div>
	</body>
</html>
