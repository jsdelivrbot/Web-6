<?php
    $f=fopen('dane.txt','w');
    for ($i=1;$i<=10;$i++) { fputs($f,$i);  fputs($f,"\r\n"); }
    fclose($f);
    $f=fopen('dane.txt','r');
    while(!feof($f))
    {
        $linia = fgets($f);
        echo $linia+100; echo '<br>';
    }
    fclose($f);
?>

