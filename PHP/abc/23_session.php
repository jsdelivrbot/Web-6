<?php
  session_start(); //pierwsza instrukcja skryptu
  if (!isset($_SESSION['licz'])) 
	  { $_SESSION['licz'] = 0; } 
	else { $_SESSION['licz']++; }

  echo 'Strona odczytana '.$_SESSION['licz'];
	echo ' razy w ciagu tej sesji';
?>
