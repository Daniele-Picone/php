<?php

 abstract class Armi {

   abstract function equipaggiamento();
   abstract function tipoDiArma();
 }


class Repulsori extends Armi{

    public function equipaggiamento(){
        echo "I Repulsori sono stati equipaggiati";
    }
    public function tipoDiArma(){
        echo "Inizo Attacco con forti fasci di energia";
    }
}

class Missili extends Armi{


    public function equipaggiamento(){
        echo "Lancia razzi equipaggiato";
    }
    public function tipoDiArma(){
        echo "Inizio attacco Missilistico";
    }
}


class Scudo extends Armi{


    public function equipaggiamento(){
        echo "Scudo energetico attivato";
    }
    public function tipoDiArma(){
        echo "Nessuno Riuscira ad attacarmi sotto questa copertura";
    }
}