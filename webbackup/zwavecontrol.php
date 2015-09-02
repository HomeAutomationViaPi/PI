<?php

$device=$_GET[device];
$level=$_GET[level];


$dir='http://localhost:8083/ZWaveAPI/Run/devices['. $device .'].instances[0].commandClasses[0x26].Set(' . $level . ',0)';
$str = file_get_contents($dir);



?>
