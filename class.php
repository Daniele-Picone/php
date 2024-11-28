<?php





abstract class Category{

 abstract public function getMyCategory();

}


 




class Attualità extends Category{
     public function getMyCategory(){
      echo "categoria: Attualità \n";
    }
}

class Sport extends Category{
    public function getMyCategory(){
      echo "Categoria: Sport \n";
    }
}

class Gossip extends Category{
     public function getMyCategory(){
       echo "Categoria gossip \n";
    }
}

class Storia extends Category{
   public function getMyCategory(){
      echo "Categoria : Storia \n";
    }
}

$attulità = new Attualità();
$sport = new Sport ();
$gossip = new Gossip();
$Storia = new Storia();


$attulità->getMyCategory();
$sport->getMyCategory();
$gossip->getMyCategory();
$Storia->getMyCategory();


