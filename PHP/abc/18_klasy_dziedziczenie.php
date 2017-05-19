<?php
  class Koszyk {
    private $lista;
    public function dodaj($nazwa,$ilosc)  {
	  if( isset($this->lista["$nazwa"]) ) 
	    { $this->lista["$nazwa"]+=$ilosc; }
	  else { $this->lista["$nazwa"]=$ilosc; }
    } //dodaj
    public function wyswietl()  {
      while(list($k,$w)=each($this->lista))
	    if($w>0) echo "$k - $w szt.<br>"; 
    } //wyswietl
  } //Koszyk
?>


<?php
  $koszyk = new Koszyk;
  $koszyk->dodaj("Chleb", 2);
  $koszyk->dodaj("Bulki", 5);
  $koszyk->dodaj("Mleko", 3);
  $koszyk->dodaj("Bulki", 5);
  $koszyk->wyswietl();
?>


<?php
  class NazwanyKoszyk extends Koszyk
  {
    private $nazwa;
    public function __construct($nazwa='Anonim') {
	   $this->nazwa=$nazwa;
	}
    public function wlasciciel() {
	   echo 'W³aœciciel: '.$this->nazwa.'<br>'; 	 
    }
  }
  $koszyk2 = new NazwanyKoszyk('Jan Kowalski');
  $koszyk2->dodaj('Kotlety schabowe', 10);
  $koszyk2->wlasciciel();  
  $koszyk2->wyswietl();
?>

