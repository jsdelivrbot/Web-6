<!doctype html>
<html>
<body>
<form method="POST" action="">
<p><b>Napisz cos:<b><br>
<input type="text" name="wiad" size="200"><br>
<button type='submit' name='wyslij'>Wyslij</button>
</p>

<?php
if (isset($_POST['wyslij']) && !empty($_POST['wiad']))
{
	date_default_timezone_set("Europe/Warsaw");
	$data=date('l jS F Y h:i:s A');
	$plik = fopen("notatki.txt", "a") or die("Unable to open file!");
	fprintf($plik,"%s on %s:\r\n",$_SESSION["login"], $data);
	fprintf($plik,"%s\r\n\r\n",$_POST["wiad"]);
	fclose($plik);
}
if (isset($_POST['wyslij']) && empty($_POST['wiad']))
{
	printf("<p>Nie można wysłać pustej wiadomości!</p>");
}
?>

</form><br>
<p><b>Notatki(użytkownik	data):</b><br><br>

<?php
$plik = fopen("notatki.txt", "r") or die("Nie mozna otworzyc pliku!");
while(!feof($plik)) 
{
  echo fgets($plik) . "<br>";
}
fclose($plik);
?>

</body>
</html>
