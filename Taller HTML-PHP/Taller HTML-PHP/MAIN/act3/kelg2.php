<?php
if($_POST){
    $cant = count($_POST);
    $h = 1.0;
    $suma = 0;
    while($h<=$cant){
        $suma+=$_POST["txtN".$h];
        $h++;
    }
    $prom = $suma / $cant;
    print "El Promedio es: ".$prom;
}else{
    print "Acceso Denegado";
}
?>
<br>
<a href="kelg1.php">Volver</a>
<button onclick="window.history.back()">Regresar</button>