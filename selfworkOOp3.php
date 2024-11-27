<?php

class Vertebrates{

    protected function stampa(){
       echo "io Sono un animale vertebrato";
    }
  
  }
  // categopry WarmBlodded
  class WarmBlodded extends Vertebrates{
    
  
      protected function stampa(){
          parent::stampa();
        echo "Sono un animale a sangue Caldo";
      }
      
  }
  
  class Lion extends WarmBlodded{
  
      protected function stampa(){
          parent::stampa();
          echo "Sono il re degli animali";
      }
  }
  
  class Bird extends WarmBlodded{
      protected function stampa(){
          parent::stampa();
          echo "sono un volatile";
      }
  }
  
  // category coldBlooded
  
  class coldBlooded extends Vertebrates{
  
      protected function stampa(){
          parent::stampa();
          echo "sono un animale a sangue freddo";
  
      }
  }
  
  class Fish extends ColdBlooded{
  
      protected function stampa(){
          parent::stampa();
           echo "Splah!";
      }
  }
  
  class reptiles extends ColdBlooded{
      protected function stampa(){
          parent::stampa();
          echo "sono un animale che vive su terra ferma";
      }
  }
  
  class Amphibians extends ColdBlooded{
     
      protected function stampa(){
          parent::stampa();
          echo " vivo sia in acqua che sulla terra ferma";
      }
  
  }



  
  
  
  $fish = new Fish ();
 
  $fish->stampa();


?>