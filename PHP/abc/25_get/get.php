<?php
  //get.php?imie=Jan&nazwisko=Kowalski  
	if ( isset($_GET['imie']) && isset($_GET['nazwisko']) ) {
	  echo $_GET['imie'].' '.$_GET['nazwisko'];
	} else echo "Wymagane jest przes�anie imienia i nazwiska!";
?>
