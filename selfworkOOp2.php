<?php

class Continent {

  public $nameContinent;

  public function __construct($Continent){
     
    $this->nameContinent = $Continent;

  }

  public function getMyContinentLocation(){

    return $this->nameContinent;

  }
}


class Cauntry extends Continent{

    public $namecauntry;

    public function __construct($Continent, $cauntry){
        parent::__construct($Continent );
        $this->namecauntry = $cauntry;
    }
    public function getMyCauntryLocation(){
       return $this->namecauntry;
    }
}

Class Region extends Cauntry{


    public $nameRegion;

    public function __construct( $Continent ,$cauntry,$region){
        parent::__construct(  $Continent,$cauntry);

        $this->nameRegion = $region ;

    }
    public function getMyregionLocal(){
        return $this->nameRegion ;
    }


}

class Province extends Region{

    public $nameprovince ;

    public function __construct($Continent, $cauntry, $region , $province){
        parent::__construct($Continent, $cauntry, $region);
        $this->nameprovince= $province;

    }
    public function getMyRegion(){
        return $this->nameprovince;
    }


}

class City extends Province{
    public $namecity;

   public function __construct($Continent, $cauntry, $region, $province, $city){

     parent::__construct($Continent,$cauntry,$region,$province);
     $this->namecity = $city;
   }

   public function getMyCity(){
    return $this->namecity;
   }


}

class Street extends City{

    public  $nameStreet;

    public function __construct($Continent, $cauntry, $region, $province, $city, $street){

        parent::__construct($Continent,$cauntry,$region,$province ,$city);
        $this-> nameStreet = $street;

    }

    public function getMyLocation(){
      
        echo " Mi trovo in " .$this->nameContinent . ", ". $this->namecauntry. ", " . $this->nameRegion .", ".  $this->nameprovince .", "   . $this->namecity .", ". $this->nameStreet ;

    }



}





$myLocation = new Street("Europa","Italia", "puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");


$myLocation->getMyLocation();




?>