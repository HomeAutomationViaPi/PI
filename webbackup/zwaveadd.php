<?php
$dir="http://localhost:8083/ZWaveAPI/Run/controller.AddNodeToNetwork(1)";
$str = file_get_contents($dir);

echo "$str";
sleep(150);

$dir="http://localhost:8083/ZWaveAPI/Run/controller.AddNodeToNetwork(0)";
$str = file_get_contents($dir);

echo "$str";


?>
