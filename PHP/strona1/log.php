<?php
$login=$_POST['login'];
$pass=$_POST['password'];
if (isset($login) && isset($pass))
{ 
  if (($login == "admin" && $pass == "test") || ($login == "stud" && $pass == "haslo")){ 
    session_start(); 
    $_SESSION["login"]=$login;
    header("Location: log1.php"); 
    exit(); 
  } else
    $error = "Blędny login lub hasło!"; 
} else
  $error = false; 
?>

<!doctype html>
<html>
<html lang = "pl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Strona</title>
    <link rel="stylesheet" href="style_zakladki.css" type="text/css" />
  </head>
  <body>
	  


    <header>
      <p><b>Strona projektu</b></p>
	  <p class="podpowiedz">Logowanie</p><br><br>
     <form class="spr"  action="log.php" method="POST">Login: 
      <input name="login" type="text" />Hasło: <input name="password" type="password"  />
      <button type="submit" name="loging">OK</button>
	</form>
      <p class="zlehaslo">
	  
<?php 
  echo $error ? $error : ""; 
?> 

</p>
    </header>
    <nav>

<?php
for($i = 0; $i <= 3; $i++)
    ${"s".$i} = "";
if(isset($_GET['str']))
  ${"s".$_GET['str']} = "class=\"wybrany\"";
else
  $s0 = "class=\"wybrany\"";
  print("<a href=\"log.php?str=0\" $s0>Strona główna</a>");
  print("<a href=\"log.php?str=1\" $s1>Kalkulator</a>");
  print("<a href=\"log.php?str=2\" $s2>Klikanie</a>"); 
  print("<a href=\"log.php?str=3\" $s3>Notatki</a>"); 
?>

    </nav>
    <article>
    <section style="height: 838px">

<?php
    if(isset($_GET['str'])) $str = $_GET['str'];
    else $str = 0;
    switch($str){
      case 0:
        include("main.php");    
        break;
      default:
       echo "<p>Musisz sie zalogowac aby uzyskac dostep</p>";
    }
?>

   </section>
   </article>
 </body>
</html>
