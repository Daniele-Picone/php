<?php 

trait Calculator{
    
    public function sum($a, $b){
        return $a + $b;
    }
    public function sub ($a , $b){
        return $a - $b;
    }
    public function mul( $a ,$b ){
        return $a * $b;
    }

    public function div ($a, $b){
        return $a / $b ;
    }
    public function sqr($a){

        return sqrt($a);
    }
}

class Rettangolo {
  
    use Calculator;

    public $base;
    public $altezza;

    public function __construct($base, $altezza){
       
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area(){
       
      echo "L'area del rettangolo è "."".  $this->mul($this->base, $this->altezza ) ."\n";

    }

    public function perimetro(){
        echo "Il perimetro è di "." ". $this->sum( $this->sum($this->base, $this->altezza),  $this->sum($this->base, $this->altezza)) ."\n";
    }

    public function diagonale(){
        echo "la diangonale è di "." ". $this->sqr($this->sum($this->mul($this->base,$this->base) , $this->mul($this->altezza,$this->altezza)))."\n"."\n";
    }


}



$rettangolo1 = new Rettangolo(30,40);
$rettangolo1->area(); 
$rettangolo1->perimetro();
$rettangolo1->diagonale();

$rettangolo2 = new Rettangolo(1300,40);
$rettangolo2->area(); 
$rettangolo2->perimetro();
$rettangolo2->diagonale();
