<?php

// prompt password

$password = readline('inserisci qui la password:');

echo "Password inserita ". $password ."\n";


// check lunghezza

function checkLeght($password){

    if (strlen($password) >= 8 ){
       
        return true;
    }else{
        echo "password corta \n";
        return false;
    }
}

// check Numero
function chekNumbers($password){
    for($i = 0 ; $i < strlen($password); $i++ ){

        if( is_numeric($password[$i])){
           
            return  true;
        }
    };
    echo "la password non contiene un numero \n";
    return false;
}

// Chek maiuscolo
function checkUppercase($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            
            return true;
        }
    }
    echo "Password Non contiene maiuscole.\n";
    return false;
}

//  chek caratteri specili
const SPECIAL_CHARS = ["!", "@" ,"#", '$'] ;
function checkSpecial($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], SPECIAL_CHARS)) {
           
            return true;
        }
    }
    echo "Password  non contine caratteri speciali.\n";
    return false;
}

// check password 
function chekPasword($password){


    $first_rule = checkLeght($password); // SINGLE RESPONSIBILITY
    $second_rule = chekNumbers($password);
    $third_rule  = checkUppercase($password);
    $fourt_rule =  checkSpecial($password);

    if($first_rule && $second_rule && $third_rule && $fourt_rule){

        echo "password accettata";
 }else{
    $password = readline('inserisci qui la password:');
    chekPasword($password);

 };
}


chekPasword($password);









?>