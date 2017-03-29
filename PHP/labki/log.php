<?php
session_start();
$login=$_POST['login'];
$pass=$_POST['password'];
if (isset($login) && isset($pass))
{ 
  if ($login == "admin" && $pass == "test"){ 
//    session_start(); 
//    session_register("login"); 
//$czy=1;
    $_SESSION["login"]=$login;
    header("Location: log1.php"); 
    exit(); 
  } else
    $error = "Bledny login lub haslo!"; 
} else
  $error = false; 
?>

<!doctype html>
<html>
<html lang = "pl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Logowanie</title>
    <link rel="stylesheet" href="style_zakladki.css" type="text/css" />
  </head>
  <body>
	  


    <header>
      <p>Dynamiczne zakładki</p>
     <form class="spr"  action="log.php" method="POST">login: 
      <input name="login" type="text" />hasło: <input name="password" type="password"  />
      <input type="submit" name="kliklo" value=" OK " /> 
	</form>
      <p class="podpowiedz">(login: admin, hasło: test)<br>
      
<?php 
  echo $error ? $error : ""; 
?> 

</p>
    </header>
    <nav>

<?php
for($i = 0; $i <= 2; $i++)
    ${"s".$i} = "";
if(isset($_GET['str']))
  ${"s".$_GET['str']} = "class=\"wybrany\"";
else
  $s0 = "class=\"wybrany\"";
  print("<a href=\"log.php?str=0\" $s0>Strona główna</a>");
  print("<a href=\"log.php?str=1\" $s1>Kalkulator</a>");
  print("<a href=\"log.php?str=2\" $s2>Notatki</a>"); 
?>

    </nav>
    <article>
    <section style="height: 850px">

<?php
    printf("<p>Zaloguj sie</p>");
?>

   </section>
   </article>
 </body>
</html>
