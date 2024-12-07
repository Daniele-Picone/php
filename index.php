<?php

require_once 'class.php';


class Post {
   
  public $titolo;
  public $category;
  public $tags;

  public function __construct( string $titolo, Category $categoria , array $tags ){

    $this->titolo = $titolo;
    $this->category= $categoria;
    $this->tags = $tags; 

  }
  public function getMytitle(){
   return $this->titolo;
  }
  public function getCategory(){
    return $this->category;
  }

public function getMytag(){
  return $this->tags;
}
 
  
public function getMyArticle(){

  echo "Title: " . $this->titolo . "\n";
  echo $this->category->getMyCategory() ;
  echo "Tags: ";
  foreach ($this->tags as $tag) {
      echo $tag. " - ";
  }
  echo "\n";

}


}


$post1 = new Post('Il Calcio che conta', $sport, [ 'gol' , 'squadra' , 'Calcio']);
$post2 = new Post("Tradimenti" , $gossip , ['avvistamenti', 'baci', 'relazioni']);
$post1->getMyArticle();
$post2->getMyArticle();
