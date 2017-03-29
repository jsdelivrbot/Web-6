<!doctype html>
<html>
<body>
<form method="POST" action="">
<input type="text" name="liczba1" size="5" value="0">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="liczba2" size="5" value="0">
<button type='submit' name='licz'>Oblicz</button>

<?php
if (isset($_POST['licz']))
{
$wynik = "";
switch ($_POST["znak"])
{
 case "+":
   $wynik = $_POST["liczba1"]+$_POST["liczba2"];
   printf("<p>Wynik: %.3lf + %.3lf = %.3lf</p>",$_POST["liczba1"], $_POST["liczba2"], $wynik); 
   break;
 case "-":
   $wynik = $_POST["liczba1"]-$_POST["liczba2"];
   printf("<p>Wynik: %.3lf - %.3lf = %.3lf</p>",$_POST["liczba1"], $_POST["liczba2"], $wynik); 
   break;
 case "*":
   $wynik = $_POST["liczba1"]*$_POST["liczba2"];
   printf("<p>Wynik: %.3lf * %.3lf = %.3lf</p>",$_POST["liczba1"], $_POST["liczba2"], $wynik); 
   break;
 case "/":
	if($_POST["liczba2"]==0)
	{
		printf("<p>Bląd, nie można dzielić przez 0!</p>");
		break;
	}
   $wynik = $_POST["liczba1"]/$_POST["liczba2"];
   printf("<p>Wynik: %.3lf / %.3lf = %.3lf</p>",$_POST["liczba1"], $_POST["liczba2"], $wynik); 
   break;
}
}
?>

</form>
</body>
</html>

