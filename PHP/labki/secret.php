<?php 
session_start(); 
if (!isset($_SESSION["login"])){ 
  header("Location: login.php"); 
 exit(); 
} 
?> 
<HTML> 
<HEAD> 
  <TITLE>Tajne</TITLE> 
</HEAD> 
<BODY> 
<b>
<?php 
  echo "Witaj " . $_SESSION["login"];
?>
</b>
<b>
<?php
  echo " <a href='logout.php'>"; 
  echo "[Wyloguj]</a>";
?> 
  <BR><B>Tajne dane.</B> 
</BODY> 
</HTML> 
