<?php


require 'IromanArmatura.php';
require 'IronmanArmi.php';
require 'IronVeicoli.php';


class IronMan {

    public $name;
    public $armatura;
    public $arma;
    public $veicoli;
     public static $counter = 0;
    public function __construct(string $name, Armatura $armatura , Armi $arma, Veicoli $veicoli ){

        $this->name = $name;
        $this->armatura = $armatura;
        $this->arma = $arma;
        $this->veicoli = $veicoli;

        self::$counter++;
    }

   
  public  function myIroman(){

    echo    "IronMan"." ". "'$this->name' si sta trasformando \n";
    echo  $this->armatura->getIndosso() ."\n" ;
    echo  $this->armatura->armaturadescription() ."\n";
    echo  $this->arma->equipaggiamento()."\n";
    echo  $this->arma->tipoDiArma(). "\n";
    echo $this->veicoli->veicoli()."\n"."\n";

  
  }

 public static function counter(){
 return self::$counter;
 }

}

$IronMan1= new ironMan('daniele', new MarkI(), new Missili(), new hovercar() );
$ironman2 = new IronMan('Federico', new MarkVII(), new Repulsori(), new Jet() );
$ironman3 = new IronMan('Gianfranco', new Hulkbuster(), new Scudo(), new Monger() );
$IronMan4= new ironMan('Pallino', new MarkVII(), new Repulsori(), new Jet() );
$IronMan1->myIroman();
$ironman2->myIroman();
$ironman3->myIroman();

echo "in totale sono stati creati ". "".IronMan::counter()." ". " IronMan \n" ;
