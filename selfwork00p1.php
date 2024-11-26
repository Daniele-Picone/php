<?php

 class Company{

    public $name;

    public $location;

    public  $assunzioni = 0;

    public $spese_annuali;

    

    public function __construct($name, $location, $assunzioni   ){

        $this->name= $name;
        $this->location = $location;
        $this-> assunzioni = $assunzioni;

    }

    public function printCompany (){
       
        echo " L'azienda ". $this->name ." ". "con sede in ". $this->location ;
        if($this->assunzioni > 0){
            echo " ha ben ". $this->assunzioni. " dipendenti \n";
        }else{
            echo " non ha dipendenti \n";
        }

    }

    public function calcoloSpeseAnnuali(){
      $salario_annuale = 30000;
      
      $this->spese_annuali = $this->assunzioni * $salario_annuale;
      echo "  La spesa annua e di " . $this->spese_annuali . "\n";
     }

     public static function calcolospeseTotali(){
        
        $totale_spese_aziende = 0;

        foreach(COMPANIES as $company){

            $totale_spese_aziende += $company->spese_annuali;
        }
        
        echo "la spesa di tutte le aziende ammonta a  ". $totale_spese_aziende;


     }






    }
    // istanze

    
    const COMPANIES =  [ 
        new Company ( "aulab", "bari", 50), 
        new Company ("Ferrero" ,"lussenburgo", 12000),
        new Company("Plastic Srl" , "zurigo", 30),
        new Company("Da michele ", "Napoli", 40 ),
        new Company("New Company", "Siena", 0), 
    ];
 

COMPANIES[0]->printCompany();
COMPANIES[0]->calcoloSpeseAnnuali();

COMPANIES[1]->printCompany();
COMPANIES[1]->calcoloSpeseAnnuali();


COMPANIES[2]->printCompany();
COMPANIES[2]->calcoloSpeseAnnuali();


COMPANIES[3]->printCompany();
COMPANIES[3]->calcoloSpeseAnnuali();

COMPANIES[4]->printCompany();
COMPANIES[4]->calcoloSpeseAnnuali();

Company::calcolospeseTotali( );

?>