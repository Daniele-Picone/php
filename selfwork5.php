<?php

$numbers = [1, 33, 54, 28, 300, 38,100,22, 11, 63 ,25 ,97 ,35 ,266 ,37 ,48 ,43 ,37 ,3 ,8 ,10 ,33 ];

$sommaPari = 0;
$contatorepari = 0;

foreach( $numbers as $number ){

    if($number % 2 == 0){
       
        $sommaPari += $number;
        $contatorepari++;  
    }  
}


$media = $sommaPari / $contatorepari;

echo $media;
