<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio</title>
</head>
<body>
    <h1>Calculadora de Promedio de Notas</h1>

    <form method="post">
        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia" required><br>

        <label for="cantidad_notas">Cantidad de Notas:</label>
        <input type="number" id="cantidad_notas" name="cantidad_notas" required><br>

        <label for="rango_min">Calificación Mínima (0-5):</label>
        <input type="number" id="rango_min" name="rango_min" min="0" max="5" step="0.1" required><br>

        <label for="rango_max">Calificación Máxima (0-5):</label>
        <input type="number" id="rango_max" name="rango_max" min="0" max="5" step="0.1" required><br>

        <?php
        if (isset($_POST['calcular_promedio'])) {
            $cantidad_notas = $_POST['cantidad_notas'];
        ?>
        <h2>Ingrese las Notas:</h2>
        <?php
            for ($i = 1; $i <= $cantidad_notas; $i++) {
        ?>
        <label for="nota<?php echo $i; ?>">Nota <?php echo $i; ?>:</label>
        <input type="number" id="nota<?php echo $i; ?>" name="notas[]" min="0" max="5" step="0.1" required><br>
        <?php
            }
        }
        ?>

        <button type="submit" name="calcular_promedio">Calcular Promedio</button>
    </form>

    <?php
    if (isset($_POST['calcular_promedio'])) {
        $materia = $_POST['materia'];
        $rango_min = $_POST['rango_min'];
        $rango_max = $_POST['rango_max'];
        $notas = $_POST['notas'];

        if (count($notas) == 0) {
            echo "<p>Debe ingresar al menos una nota.</p>";
        } else {
            $promedio = array_sum($notas) / count($notas);
            $nota_minima_aprobacion = $rango_min + 0.5;
            $aprobo_materia = ($promedio >= $nota_minima_aprobacion) ? "Aprobó" : "Reprobó";

            echo "<h2>Resultado:</h2>";
            echo "<p>Materia: $materia</p>";
            echo "<p>Promedio de Notas: " . number_format($promedio, 2) . "</p>";
            echo "<p>Nota Mínima para Aprobar: $nota_minima_aprobacion</p>";
            echo "<p>El estudiante $aprobo_materia la materia.</p>";
        }
    }
    ?>
</body>
<button onclick="window.history.back()">Regresar</button>
</html>

