<?php
function nazwa()
{
	static $a=1; 
	echo $a."<br>";
	$a++;
}

  nazwa();
  nazwa();
	nazwa();
?>

