<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Areas</title>
</head>
<body>
    <h1>Calculadora de Areas</h1>

    <h2>Circulo</h2>
    <form method="post">
        Radio: <input type="text" name="radio">
        <button type="submit" name="calcularCirculo">Calcular</button>
    </form>
    <p>Area del circulo: <span>
        <?php
        if (isset($_POST['calcularCirculo'])) {
            $radio = floatval($_POST['radio']);
            $areaCirculo = pi() * $radio * $radio;
            echo number_format($areaCirculo, 2);
        }
        ?>
    </span></p>

    <h2>Cuadrado</h2>
    <form method="post">
        Lado: <input type="text" name="ladoCuadrado">
        <button type="submit" name="calcularCuadrado">Calcular</button>
    </form>
    <p>Area del cuadrado: <span>
        <?php
        if (isset($_POST['calcularCuadrado'])) {
            $ladoCuadrado = floatval($_POST['ladoCuadrado']);
            $areaCuadrado = $ladoCuadrado * $ladoCuadrado;
            echo number_format($areaCuadrado, 2);
        }
        ?>
    </span></p>

    <h2>Rectangulo</h2>
    <form method="post">
        Base: <input type="text" name="baseRectangulo">
        Altura: <input type="text" name="alturaRectangulo">
        <button type="submit" name="calcularRectangulo">Calcular</button>
    </form>
    <p>Area del rectángulo: <span>
        <?php
        if (isset($_POST['calcularRectangulo'])) {
            $baseRectangulo = floatval($_POST['baseRectangulo']);
            $alturaRectangulo = floatval($_POST['alturaRectangulo']);
            $areaRectangulo = $baseRectangulo * $alturaRectangulo;
            echo number_format($areaRectangulo, 2);
        }
        ?>
    </span></p>

    <h2>Triangulo</h2>
    <form method="post">
        Base: <input type="text" name="baseTriangulo">
        Altura: <input type="text" name="alturaTriangulo">
        <button type="submit" name="calcularTriangulo">Calcular</button>
    </form>
    <p>Area del triangulo: <span>
        <?php
        if (isset($_POST['calcularTriangulo'])) {
            $baseTriangulo = floatval($_POST['baseTriangulo']);
            $alturaTriangulo = floatval($_POST['alturaTriangulo']);
            $areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
            echo number_format($areaTriangulo, 2);
        }
        ?>
    </span></p>
</body>
<button onclick="window.history.back()">Regresar</button>
</html>
