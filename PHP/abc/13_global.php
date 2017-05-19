<?php
function nazwa()
{
   global $a; 
	 $a++;
   echo $a."<br>";
}

  $a = 1;
  nazwa();
	echo $a."<br>";
?>

