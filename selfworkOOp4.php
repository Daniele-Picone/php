<?php

   class Car{

    private $numeroTelaio ;
    public function __construct($numeroTelaio){
     $this->numeroTelaio = $numeroTelaio;
    } public function getNumeroTelaio(){
        return $this->numeroTelaio;
    }
}

class Fiat extends Car{
    
    protected $license;
    protected $name;
   

    public function __construct( $name,  $license , $numeroTelaio  ){
        parent::__construct($numeroTelaio );

        $this->license = $license;

        $this->name = $name;

     
    }

    public function PrintCar(){
      
        echo  "la mia macchina ". $this->name.", " . "targata". $this->license. "ha il numero di telaio n." . $this->getNumeroTelaio() ; 

    }

}
$fiat = new Fiat( "Opel", " ND 123 OJ ", 1234);
$fiat->PrintCar();

?>