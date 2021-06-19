<?php
$longitud = $_POST['longitud'];
$apotema = $_POST['apotema'];
$area = null;
$area = ($longitud * 4) * $apotema;

echo "El valor del área: ".$area;
echo "<br/><br/>";
echo "El valor de la longitud ingresada: ".$longitud;
echo "<br/><br/>";
echo "El valor de la apotema ingresada: ".$apotema;
?>