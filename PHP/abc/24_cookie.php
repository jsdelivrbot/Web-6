<?php
  $tab = Array('a' => 'pierwszy', 'b' => 'drugi');
  //zapis cookie
  setcookie('tab', serialize($tab), time()+3600);
  //odczyt cookie
  if (isset($_COOKIE['tab'])) 
    { $tab = unserialize($_COOKIE['tab']); } 
  else { $tab = Array(); }
  //unset($_COOKIE['tab']); //usuniêcie cookie
  //wypisanie cookie na ekran
  while(list($k, $w)=each($tab)) {
  echo "$k = $w<br>";  }
?>
