Eliminar Docentes php
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
// Procesar la solicitud para eliminar un docente
If ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];

    // Verificar si el docente tiene cursos asociados antes de eliminar
    $sql = "SELECT COUNT(*) as total_cursos FROM cursos WHERE docente_id = '$codigo'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($result);
    If ($row['total_cursos'] > 0) {
        Echo "No se puede eliminar el docente, tiene cursos asociados.";
    } else {
        // Realizar la eliminación en la base de datos
        $sql = "DELETE FROM docentes WHERE codigo = '$codigo'";
        If (mysqli_query($conexion, $sql)) {
            Echo "Docente eliminado exitosamente.";
        } else {
            Echo "Error al eliminar el docente: " . mysqli_error($conexion);
        }
    }
}

// Cerrar la conexión a la base de datos (mismo código de cierre que en los ejemplos anteriores)
Mysqli_close($conexion);
?>