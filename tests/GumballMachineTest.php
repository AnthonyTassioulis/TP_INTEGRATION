<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="x_test_tp"; // a changer
    private $prenom="y_test_tp"; // a changer
    private $date_naissance="0000-00-00"; // a changer
    private $lieu_naissance="XY"; // a changer

     private $nom1="XXX1"; // a changer
     private $prenom1="YYY1"; // a changer
     private $date_naissance1="1980-09-29"; // a changer
     private $lieu_naissance1="ZZZ1"; // a changer

     private $nom2="XXX2"; // a changer
     private $prenom2="YYY2"; // a changer
     private $date_naissance2="1981-10-30"; // a changer
     private $lieu_naissance2="ZZZ2"; // a changer

     private $nom3="XXX3"; // a changer
     private $prenom3="YYY3"; // a changer
     private $date_naissance3="1982-12-31"; // a changer
     private $lieu_naissance3="ZZZ3"; // a changer

    // cours
    private $intitule="IOT"; //a remplir
    private $duree="10";    //a remplir

    private $intitule1="IA"; //a remplir
    private $duree1="12";    //a remplir

    private $intitule2="C++"; //a remplir
    private $duree2="18";    //a remplir

    private $intitule3="EDL"; //a remplir
    private $duree3="30";    //a remplir
    
        
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();

        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom2,$this->prenom2,$this->date_naissance2,$this->lieu_naissance2));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom3,$this->prenom3,$this->date_naissance3,$this->lieu_naissance3));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+3,$max__id2);
    }



    public function testAffichageProfAPI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("After Insertion of Professors"));
        /*� completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("Before Insertion of Course"));
        /*� completer*/
    }
    public function testInsertC()
    {

        $max__id1=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule,$this->duree, $this->gumballMachineInstance->GetIdP($this->nom2, $this->prenom2)));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule1,$this->duree1, $this->gumballMachineInstance->GetIdP($this->nom1, $this->prenom1)));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule2,$this->duree2, $this->gumballMachineInstance->GetIdP($this->nom3, $this->prenom3)));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule3,$this->duree3, $this->gumballMachineInstance->GetIdP($this->nom3, $this->prenom3)));
        $max__id2=$this->gumballMachineInstance->GetLastIDC();
        $this->assertEquals($max__id1+4,$max__id2);

        /*� completer*/
    }
    public function testAffichageCoursAPI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("After Insertion of Course"));
    }



    public function testUpdateC()
   {

       $this->assertEquals(true,$this->gumballMachineInstance->UpdateC("C++",30));

   }

    public function testAffichageCoursAPU()
       {
           $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("After Update of Course"));
       }
}
