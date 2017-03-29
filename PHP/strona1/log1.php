<?php
session_start();
if(!isset($_SESSION["login"])) //Nie mozna zobaczyc strony przez wpisanie w adresie log1.php
	header("Location: log.php"); 
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
      <p><b>Strona projektu</b></p><p class="podpowiedz">
			
<?php 
echo "Witaj " . $_SESSION["login"] . "<br>";
?>
	  
</p><br><br>
      <form class="spr"  action="#" method="POST">
      <button type='submit' name='logout'>Wyloguj</button>
            
     
<?php
if (isset($_POST['logout']))
{
  session_destroy(); 
  header("Location: log.php"); 
}
?>

    </header>
    <nav>

<?php
for($i = 0; $i <= 3; $i++)
    ${"s".$i} = "";
if(isset($_GET['str']))
  ${"s".$_GET['str']} = "class=\"wybrany\"";
else
  $s0 = "class=\"wybrany\"";
  print("<a href=\"log1.php?str=0\" $s0>Strona główna</a>");
  print("<a href=\"log1.php?str=1\" $s1>Kalkulator</a>");
  print("<a href=\"log1.php?str=2\" $s2>Klikanie</a>"); 
  print("<a href=\"log1.php?str=3\" $s3>Notatki</a>"); 
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
      case 1:
        printf("<p>To jest kalkulator</p><br>");
        include("calc.php"); 
        break;
      case 2:
	  printf("<p>To jest licznik klikniec</p>");
        include("kliki.php"); 
        break;
	case 3:
	  printf("<p>To jest notatnik</p>");
        include("notatnik.php"); 
        break;
    }
?>

   </section>
   </article>
 </body>
</html>
