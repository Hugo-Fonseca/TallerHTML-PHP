Consultar docente que imparte el curso 
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
// Procesar la solicitud para consultar los docentes que imparten un curso
If ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo_curso = $_POST['codigo_curso'];

    // Realizar la consulta en la base de datos
    $sql = "SELECT docentes.codigo, docentes.nombre FROM docentes
            JOIN cursos ON docentes.codigo = cursos.docente_id
            WHERE cursos.codigo = '$codigo_curso'";
    $result = mysqli_query($conexion, $sql);

    If (mysqli_num_rows($result) > 0) {
        Echo "Docentes que imparten el curso:<br>";
        While ($row = mysqli_fetch_assoc($result)) {
            Echo "Código: " . $row['codigo'] . " – Nombre: " . $row['nombre'] . "<br>";
        }
    } else {
        Echo "El curso no tiene docentes registrados como instructores.";
    }
}

// Cerrar la conexión a la base de datos (mismo código de cierre que en los ejemplos anteriores)
Mysqli_close($conexion);
?>
