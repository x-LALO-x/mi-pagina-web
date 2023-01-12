<?php  

$usuario = $_POST['usuario']
$nombre = $_POST['nombre']
$apellido = $_POST['apellido']
$correo = $_POST['email']
$contra = $_POST['clave1']
$pais = $_POST['pais']
$sexo = $_POST['sexo']

$mensaje = "Este mensaje fue enviado por el usuario" . $usuario . "\r\n";
$mensaje .= "Su nombre es: " . $nombre . " Su apellido es: " . $apellido . "\r\n";
$mensaje .= "Su correo es: " . $correo . "\r\n";
$mensaje .= "Su contrasena es: " . $contra . "\r\n";
$mensaje .= "Su pais es: " . $pais . "\r\n";
$mensaje .= "Su sexo es: " . $sexo . "\r\n";
$mensaje .= "Enviado el dia: " . date('d/m/y' , date());

$destinatario = 'jim65eduardo@gmail.com';
$asunto = 'Este correo fue enviado desde mi pagina web1';
$header = 'From: $correo' . "\r\n" .
    'Reply-To: $correo' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($destinatario, $asunto, $mensaje , $header);

header('Location:index.html');

?>
