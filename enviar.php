<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $comentario = $_POST["consulta"];

    $para = "pablo.areas@gmail.com";
    $asunto = "Consulta web.";
    $mensaje = "El usuario " . $nombre;
    $mensaje .= "tiene la consulta:" . $comentario;
    $mensaje .= "Responder a:" . $email;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'From: Administracion <administracion@suempresa.com>' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

    echo($mensaje);

    mail($para, $asunto, $mensaje, $headers);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form procesado</title>
</head>
<body>
    <h1>Gracias</h1>
</body>
</html>