<?php

  $t1[0]="Ola"; $t1[1]="Ala"; $t1[2]="Ewa"; 
	sort($t1);
	$t2[]=10; $t2[]=3; $t2[]=9; $t2[]=5; 
	$t3["imie"]="Jan"; $t3["nazwisko"]="Kuc";
  for($i=0;$i<=2;$i++) {echo $t1[$i]."<br>";}
	for($j=0,$ile=count($t2);$j<$ile;$j++ ){echo $t2[$j]."<br>";}
	while (list ($klucz, $wartosc) = each ($t3)) {
    echo "$klucz = $wartosc<br>";
	}
	$dane=implode(";",$t2); echo $dane;
	
?>

<?php	var_dump($t1); ?>

