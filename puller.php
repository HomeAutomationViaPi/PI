<?php
$target=$_GET[target];
$proto=$_GET[proto];


$url="$proto://$target";
$str = file_get_contents($url);

echo "$str";


?>
