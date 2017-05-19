<?php 
 	echo 'Zmiennych nie deklarujemy!';

	$a=1; ++$a; $a++; --$a; $a--; $a+=1; $a-=1; $a*=1; $a/=1; $a%=2;
	$a=1.5; //a=5%3; $a='napis';

	$b=13; $c=$b*2;
	echo $b; echo "<br>c=$c";

	$dziwo=2+"5 wafli"; echo "<br>".$dziwo; //7

  define("STALA", "Hauuuuuu");
  echo '<br>'.STALA;	
?>
