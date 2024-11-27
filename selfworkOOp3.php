<?php

class Vertebrates{


    public function __construct() {
        $this->stampaVertebrates();
        
    }
    protected function stampaVertebrates(){
       echo "io Sono un animale vertebrato \n";
    }
  
  }
  // categopry WarmBlodded
  class WarmBlodded extends Vertebrates{
    
    public function __construct(){
        parent::__construct();
        $this->stampaWarmBlodded();
    }
      protected function stampaWarmBlodded(){
        echo "Sono un animale a sangue Caldo \n";
      }
      
  }
  
  class Lion extends WarmBlodded{
  public function __construct(){
      parent::__construct();
    $this->stampalion();
  }
      protected function stampalion(){
          echo "Sono il re degli animali \n";
      }
  }
  
  class Bird extends WarmBlodded{
    public function __construct(){
        parent::__construct();
        $this->stampaBird();
    }
      protected function stampaBird(){
          echo "sono un volatile \n";
      }
  }
  
  // category coldBlooded
  
  class coldBlooded extends Vertebrates{
     public function __construct(){
         parent::__construct();
        $this-> stampaColdBlooded();
     }
      protected function stampaColdBlooded(){
          echo "sono un animale a sangue freddo \n";
  
      }
  }
  
  class Fish extends ColdBlooded{
     
    public function __construct(){
        parent::__construct();
        $this-> stampaFish();
    }
      protected function stampaFish(){
           echo "Splah! \n";
      }
  }
  
  class reptiles extends ColdBlooded{

    public function __construct(){
        parent::__construct();
        $this->stampaReptiles();
    }
      protected function stampaReptiles(){
          echo "sono un animale che vive su terra ferma \n";
      }
  }
  
  class Amphibians extends ColdBlooded{
     public function __construct(){
         parent::__construct();
        $this->stampaAmphibians();
     }
      protected function stampaAmphibians(){
          echo " vivo sia in acqua che sulla terra ferma \n";
      }
  
  }



  
  
  $lion = new Lion();
  $bird = new Bird();
  $fish = new Fish ();
  $amphibians = new Amphibians();
  $reptiles = new reptiles(); 
 


?>