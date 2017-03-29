<?php 
session_start(); 
?> 
<HTML> 
<HEAD> 
  <TITLE>Wylogowanie</TITLE> 
</HEAD> 
<BODY> 
<?php 
  echo "Uzytkownik " . $_SESSION["login"]; 
  echo " zostal wylogowany."; 
  session_destroy(); 
?> 
</BODY> 
</HTML> 
