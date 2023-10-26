<?php
// Conexión a la base de datos (mismo código de conexión que en los ejemplos anteriores)
$db_host = "tu_host";
$db_usuario = "tu_usuario";
$db_password = "tu_contraseña";
$db_nombre = "tu_base_de_datos";

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
If ($conexion) {
    Die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
// Procesar el formulario para actualizar un docente
If ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $ocupacion = $_POST['ocupacion'];

    // Realizar la actualización en la base de datos
    $sql = "UPDATE docentes SET nombre = '$nombre', ocupacion = '$ocupacion' WHERE codigo = '$codigo'";
    If (mysqli_query($conexion, $sql)) {
        Echo "Docente actualizado exitosamente.";
    } else {
        Echo "Error al actualizar el docente: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos (mismo código de cierre que en los ejemplos anteriores)
Mysqli_close($conexion);
?>
