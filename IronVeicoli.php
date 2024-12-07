
<?php

abstract class Veicoli{

    abstract function veicoli();
}

class Jet extends Veicoli{

    public function veicoli(){
        echo "Utilizzo jet da Combattimento";
    }
}

class hovercar extends Veicoli{

    public function veicoli(){
        echo "Utilizzo l'Hovercar per muovermi meglio in città";
    }
}

class Monger extends Veicoli{

  public function veicoli(){
    echo "Utilizzo per combattere grossi avversari";
  }

}