<?php



  abstract class Armatura{
    
    
    
    abstract function getIndosso() ;
    abstract function armaturadescription();
    
  }
  class MarkI extends Armatura{

  
    public function getIndosso(){
       echo "L'armatura MarkI è stata indossata "  ;
    }
    public function armaturadescription(){

      echo "L'armatura è di colore rosso ed Oro  ";
    }
}

class MarkVII extends Armatura{


  public function armaturadescription(){
    echo "L'amatura è di color nero e bianco";
  }
  public function getIndosso(){

    echo "L'amartura MarkVII è stata indossata";


  }
}

  class Hulkbuster extends Armatura{

    public function getIndosso(){
     echo  "La Hulkbuster è stata indossata ";
    }
     public function armaturadescription(){
      echo "L'amartura è di color verde e marrone ";

     }
  }
  



  // $armatura1 = new MarkI();
  // $armatura1->getIndosso();
  // $armatura1->armaturadescription();
  