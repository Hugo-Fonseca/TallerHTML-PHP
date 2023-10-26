<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="kelg1.php" method="post">
        <p>Numero de notas <input type="text" name="txtcant"></p>
        <p><input type="submit"></p>
    </form>
    <?php
    if($_POST){
        $cant = $_POST["txtcant"];
        $i=1;
        ?>
        <form action="kelg2.php" method="post">
        <?php
        while($i<=$cant){
            ?>
            <p>Nota <?php print $i ?><input type="text" name="txtN<?php print $i ?>"></p>
            <?php
            $i++;
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
        <?php
    }
    ?>
    <button onclick="window.history.back()">Regresar</button>
</body>

</html>