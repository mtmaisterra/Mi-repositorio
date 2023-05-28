<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $mail = $_POST["mail"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $direccion = $_POST["direccion"];
    $localidad =$_POST["localidad"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña = $_POST["contraseña"];
    $Ncontraseña =$_POST["Ncontraseña"];

    
    // Aquí puedes procesar los datos recibidos, como almacenarlos en una base de datos o enviar un correo electrónico de confirmación.
    
    // Por ejemplo, vamos a imprimir los datos en pantalla:
    echo "nombres: " . $nombre . "<br>";
    echo "apellidos" . $apellidos . "<br>";    
    echo "mail: " . $mail . "<br>";
    echo "fecha_nacimiento" . $fecha_nacimiento . "<br>";
    echo "direccion" . $direccion . "<br>";
    echo "localidad" . $localidad . "<br>";
    echo "nombre_usuario" . $nombre_usuario . "<br>";
    echo "contraseña" . $contraseña . "<br>";
    echo "Ncontraseña" .$Ncontraseña . "<br>";

}
?>
