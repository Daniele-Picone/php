<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name'=> 'Gino', 'surname' => 'Persico' , 'gender' => 'M'],
    ['name'=> 'laura', 'surname' => 'Prisco' , 'gender' => 'F'],
    ['name'=> 'Virgilio', 'surname' => 'Dante' , 'gender' => 'M'],
    ['name'=> 'Franceca', 'surname' => 'Bons' , 'gender' => 'F'],
    ['name'=> 'Vanessa', 'surname' => 'Nittoli' , 'gender' => 'F'],
  ];

$strngm = 'Buongiorno Sig.';
$strngf = 'Buongiorno Sig.ra'; 

foreach ($users as $user ){

  if( $user['gender'] == 'M'){
    echo  $strngm . " ". $user['name']. " ".  $user['surname'] . "\n" ;
  }else if ($user['gender'] == 'F'){

    echo $strngf." " . $user['name']. " ". $user['surname'] . "\n" ;
  }

};