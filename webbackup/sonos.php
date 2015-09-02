<?php

$command=$_GET[command];

if ($command=="play"){
	echo exec('socos play 10.0.0.2;socos play 10.0.0.6');	

}
if ($command=="volup"){
	echo exec('socos volume 10.0.0.2 -20;socos volume 10.0.0.6 -20');

}
if ($command=="voldown"){
	echo exec('socos volume 10.0.0.2 -20;socos volume 10.0.0.6 -20');


}
if ($command=="off"){
	echo exec('socos pause 10.0.0.2;socos pause 10.0.0.6');


}



?>
