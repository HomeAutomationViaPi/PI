<?php

$device=$_GET[device];
$level=$_GET[level];
$command=$_GET[command];
$ip=$_GET[ip];

if ($command=="play"){
        echo exec('socos play ' . $ip);
}
if (isset($level)){
        $cvol=exec('socos volume ' . $ip);
	if ($cvol > $level){
		$change=$cvol - $level;
		$newlevel="-$change";
	}else{
		$change=$level - $cvol;
		$newlevel="+$change";
		
	}

        echo exec('socos volume ' . $ip . ' ' . $newlevel);

}

if ($command=="off"){
        echo exec('socos pause ' . $ip);


}



?>
