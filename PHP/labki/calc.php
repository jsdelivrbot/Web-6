<!doctype html>
<html>
<body>
<form method="POST" action="calc.php">
<input type="number" name="liczba1" size="8">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="number" name="liczba2" size="8">
<input type="submit" value="Oblicz">

<?php
$wynik = "";
switch ($_POST["znak"])
{
 case "+":
   $wynik = $_POST["liczba1"]+$_POST["liczba2"];;
   break;
 case "-":
   $wynik = $_POST["liczba1"]-$_POST["liczba2"];;
   break;
 case "*":
   $wynik = $_POST["liczba1"]*$_POST["liczba2"];;
   break;
 case "/":
   $wynik = $_POST["liczba1"]/$_POST["liczba2"];;
   break;
}
echo "<br>" . $wynik;
?>

</form>
</body>
</html>

