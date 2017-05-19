<?php
function zwieksz_licznik_o_jeden($nazwa_pliku)
{
    if(is_file($nazwa_pliku)) {      //czy istnieje plik
        $f=fopen($nazwa_pliku,'r+'); //otwarcie pliku
        flock($f, LOCK_EX);          //blokada pliku
        $licznik=fread($f,100);      //odczyt z pliku
        $licznik++;                  
        rewind($f);                  //przesunięcie wskaźnika na początek
        fwrite($f,$licznik);         //zapis do pliku
        flock($f,LOCK_UN);           //odblokowanie pliku
    } else {
        $f=fopen($nazwa_pliku,'w');  //otwarcie pliku 
        $licznik=1;
        fwrite($f,$licznik);         //zapis do pliku
    }
    fflush($f);                      //wymuszenie zapisu z bufora do pliku
    fclose($f);                      //zamknięcie pliku
    return $licznik;
}
  echo zwieksz_licznik_o_jeden('licznik.txt');
?>
