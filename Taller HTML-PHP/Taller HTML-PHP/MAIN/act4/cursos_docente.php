Consultar cursos de un docente
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
// Procesar la solicitud para consultar los cursos de un docente
If ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo_docente = $_POST['codigo_docente'];

    // Realizar la consulta en la base de datos
    $sql = "SELECT cursos.codigo, cursos.nombre FROM cursos WHERE docente_id = '$codigo_docente'";
    $result = mysqli_query($conexion, $sql);

    If (mysqli_num_rows($result) > 0) {
        Echo "Cursos impartidos por el docente:<br>";
        While ($row = mysqli_fetch_assoc($result)) {
            Echo "Código: " . $row['codigo'] . " – Nombre: " . $row['nombre'] . "<br>";
        }
    } else {
        Echo "El docente no tiene cursos registrados.";
    }
}

// Cerrar la conexión a la base de datos (mismo código de cierre que en los ejemplos anteriores)
Mysqli_close($conexion);
?>