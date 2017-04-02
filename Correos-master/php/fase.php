
<?php

//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');

//Recibir todos los parámetros del formulario
$a = 'Fase de su Trabajo';
$fase='entrega';
$m='Hemos recibido su trabajo y ahora se encuentra en la fase de ' .$fase. ' si desea conocer el estatus de su trabajo desde el sistema puede ingresar con su cédula y buscar el apartado "status del trabajo"';
$m1='<center><br><br><br><br><br><br><b>PERTINENCIA SOCIAL Y PARTICIPACIÓN POPULAR</b></center>';
$para = $_POST['email'];
$asunto = $a;
$mensaje = $m.$m1;

//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

//Nuestra cuenta
$mail->Username ='yordyalejandro13@gmail.com';
$mail->Password = '26136890';

//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
$mail->MsgHTML($mensaje);

//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
	echo'enviado';
}
else{
	echo'<script type="text/javascript">
			alert("NO ENVIADO, intentar de nuevo");
		 </script>';
}
?>
