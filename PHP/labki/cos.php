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
	 <input type="submit" value="KLIK"><br>
Klikniec: 

<?php
$i=0;
$czy=1;
$klik = fopen("klik.txt", "c+") or die("Unable to open file!");
$ip = fopen("ip.txt", "c+") or die("Unable to open file!");
fscanf($klik, "%d", $ile);
echo $ile;
while(!feof($ip)) 
{
  fscanf($ip,"%s", $tab[$i]);
  if (strcmp($_SERVER['REMOTE_ADDR'],$tab[$i]) == 0)
  {
	  $czy=0;
  }
  $i++;
}
if($czy==1)
{
	$ile++;
	rewind($klik);
	fputs($klik, $ile);
	fprintf($ip,"%s\r\n",$_SERVER['REMOTE_ADDR']);
}
fclose($klik);
?>

</form>
</body>
</html>
