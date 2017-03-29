<!doctype html>
<html>
<body><p>Można kliknąć tylko raz na 60 sekund<br><b>
	Kliknij:</b>
	<form method="POST" action="">
	 <button type='submit' name='kliklo'>KLIK</button><br><b>
Klikniec: 

<?php
$i=0;
$klik = fopen("klik.txt", "c+") or die("Unable to open file!");
fscanf($klik, "%d", $ile);
echo $ile;
$time=60;
setcookie("klik","", time()-$time, '/');
if(!isset($_COOKIE["klik"]) && isset($_POST['kliklo']))
{
	setcookie("klik","1",time()+$time);
	$ile++;
	rewind($klik);
	fputs($klik, $ile);
	echo "<br><br>";
	header("Refresh:0");
}
fclose($klik);
?>
</p>
</form>
</body>
</html>
