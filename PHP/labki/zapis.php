<!doctype html>
<html>
<body>
<form method="POST" action="zapis.php">
<p align="right">Nowa osoba:<br>
<input type="text" name="imie" size="10"><br>
<input type="submit" value="Wyslij">
</p>

<?php
if (!empty($_POST["imie"]))
{
	$plik = fopen("zapis.txt", "a") or die("Unable to open file!");
	fprintf($plik,"%s\r\n",$_POST["imie"]);
	fclose($plik);
}
?>

</form>
<p align="left">Osoby zapisane:<br>

<?php
$plik = fopen("zapis.txt", "r") or die("Unable to open file!");
while(!feof($plik)) 
{
  echo fgets($plik) . "<br>";
}
fclose($plik);
?>

 <br><br>

	Kliknij:
	<form method="POST" action="zapis.php">
	 <input type="submit" name="kliklo" value="KLIK"><br>
Klikniec: 

<?php
$i=0;
$klik = fopen("klik.txt", "c+") or die("Unable to open file!");
fscanf($klik, "%d", $ile);
echo $ile;
$time=3600;
setcookie("klik","", time()-$time, '/');
if(!isset($_COOKIE["klik"]) && isset($_POST["kliklo"]))
{
	setcookie("klik","1",time()+$time);
	$ile++;
	rewind($klik);
	fputs($klik, $ile);
	header("Refresh:0");
}
fclose($klik);
?>

</form>
</body>
</html>
