<?php
// Conexión a la base de datos
$db_host = "tu_host";
$db_usuario = "tu_usuario";
$db_password = "tu_contraseña";
$db_nombre = "tu_base_de_datos";

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
If ($conexion) {
    Die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Procesar el formulario para registrar un curso
If ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $curso_codigo = $_POST['curso_codigo'];
    $curso_nombre = $_POST['curso_nombre'];
    $docente = $_POST['docente'];

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO cursos (codigo, nombre, docente_id) VALUES ('$curso_codigo', '$curso_nombre', '$docente')";
    If (mysqli_query($conexion, $sql)) {
        Echo "Curso registrado exitosamente.";
    } else {
        Echo "Error al registrar el curso: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
Mysqli_close($conexion);
?>

