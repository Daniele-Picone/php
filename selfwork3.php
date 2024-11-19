<?php

$words1 = [ 'vostro',  67, 'essere','colle', 'mi', 'sempre',['oscura,', 'era', 89, [ 'mezzo',  'E' ],'ritrovai','per' ], 'diritta' ];

 $words2 = [
    'elemento1' => 'che',
    'elemento2' => 'la',
    'elemento3' => ['Virgilio',  'via', 'favore', ['smarrita']],
     'fine' => '!'
  ];

  $word3= [ 'Nel', 'del' , 'cammin' , 'words' => ['di' , 'nostra', 'vita' , [ 'una', [ 'selva '] ] ]];

  $result1 =  $word3[0]." ". $words1[6][3][0]. " ". $word3[1]. " " . $word3[2]." ". $word3['words'][0]. " ". $word3['words'][1]. " ". $word3['words'][2]  ;

  $result2 = $words1[4]. " ". $words1[6][4]. " ". $words1[6][5]. " ". $word3['words'][3][0]. " ".$word3['words'][3][1][0]. " " .$words1[6][0] ;
  
  $result3 = $words2['elemento1'] ." ". $words2['elemento2']." ". $words1[7] . " ". $words2['elemento3'][1]. " ". $words1[6][1]. " ". $words2['elemento3'][3][0] ; 

  $resultall = $result1. " ". $result2 . " " . $result3;
  
  echo $resultall;