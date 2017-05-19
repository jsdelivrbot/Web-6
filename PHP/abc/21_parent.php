<?php
class Kubek {
    private $kolor;
    public function __construct($kolor) { $this->kolor = $kolor; }
    public function __destruct() { echo 'Zniszczony kubek'; }
    public function przedstawSie() {  return 'Jestem kubek, moj kolor '.$this->kolor; }
}
class KubekUcho extends Kubek { 
    protected $kolorUcha;
    public function  __construct($kolor, $kolorUcha) {
       parent::__construct($kolor); //konstruktor z klasy bazowej
        $this->kolorUcha = $kolorUcha; 
		}
    public function przedstawSie() {
        return parent::przedstawSie().', a ucho '.$this->kolorUcha;
		}
}

//testujemy klasę KubekUcho
  $tmp = new KubekUcho('czerwony','czarny');
  echo $tmp->przedstawSie();

?>

