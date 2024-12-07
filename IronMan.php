<?php


require 'IromanArmatura.php';
require 'IronmanArmi.php';


class IronMan {

    public $name;
    public $armatura;
    public $arma;
     public static $counter = 0;
    public function __construct(string $name, Armatura $armatura , Armi $arma){

        $this->name = $name;
        $this->armatura = $armatura;
        $this->arma = $arma;

        self::$counter++;
    }

   
  public function myIroman(){

    echo    "IronMan"." ". "'$this->name' si sta trasformando \n";
    echo  $this->armatura->getIndosso() ."\n" ;
    echo  $this->armatura->armaturadescription() ."\n";
    echo  $this->arma->equipaggiamento()."\n";
    echo  $this->arma->tipoDiArma(). "\n";

    echo "Sono Stati creati"." ". self::$counter ." "."Ironman ".""."\n"."\n" ;
  }



}


$IronMan1= new ironMan('daniele', new MarkI(), new Missili() );
$ironman2 = new IronMan('Federico', new MarkVII(), new Repulsori());
$ironman3 = new IronMan('Gianfranco', new Hulkbuster(), new Scudo());
$IronMan1->myIroman();
$ironman2->myIroman();
$ironman3->myIroman();
