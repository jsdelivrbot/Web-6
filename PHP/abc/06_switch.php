<?php

$i=0;

  switch($i){
   case 0:
	   echo "zero<br>";
   case 1:
   case 2:
   case 3:
      echo "mniej niz 4<br>";
      break;
   case 4:
      echo "cztery<br>";
      break;
   default:
      echo "inna liczba<br>";
  }

?>