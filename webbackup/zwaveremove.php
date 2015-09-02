<?php

$node=$_GET[node];
$dir="http://localhost:8083/ZWaveAPI/Run/controller.IsFailedNode($node)";
$str = file_get_contents($dir);

echo "$str<br>";
echo "if not failed---unplud and disconect battery in the node and re-run<br>";"

$dir="http://localhost:8083/ZWaveAPI/Run/controller.RemoveFailedNode($node)";
$str = file_get_contents($dir);

echo "$str";

?>
