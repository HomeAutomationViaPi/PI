<?php
$dir="/home/pi/.commands.conf";
$str = file_get_contents($dir);
foreach (explode(PHP_EOL, $str) as $line){
	if (strpos($line,'!') !== false) {
		$config[]=$line;
	}elseif (strpos($line,'#') !== false) {
		$comments[]=$line;
	}else {
		$commands[]=$line;
	}
}


echo "Config<br>";
foreach ($config as $line){
	echo "$line<br>";
}
echo "<br>Commands<br>";
foreach ($commands as $line){
	echo "$line<br>";
}

?>
