<?php

/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 22.03.2017
 * Time: 12:11
 */
class template
{// klassi algus
    //template klassi omadused - muutujad
    var $file = "";//hmtl malli failinimi
    var $content = false; //html malli failisisu
    var $vars = array(); //html vaate sisu - reaalsed väärtused
    //klassi tegevused - meetodid - funktsioonid

    function __construct($f)
    {
        $this -> file = $f; //määrame html malli faili nime
        $this->loadFile(); // loeme määratud failist sisu
    }//konstruktor

    //html malli faili lugemis funktsioon
    function loadFile()
    {
        $f = $this->file; // lokaalne asendus
        //kontrollib mallide kataloogi olemasolu
        if (!is_dir(TMPL_DIR)) {
            echo "Kataloogi" . TMPL_DIR . " ei leitud.";
            exit;
        }
        //kui fail on olemas ja lugemiseks sobiv
        if (file_exists($f) and is_file($f) and is_readable($f)) //kui fail on olemas ja lugemiseks sobib loeme faili sisu
        {
            $this->readFile($f);
        }
       //lisame TMPL_DIR kaustadele
        $f = TMPL_DIR.$this -> file.'.html'; //veel üks lokaalne asendus
        if(file_exists($f) and is_file($f) and is_readable($f))
        {
            //loeme failist malli sisu
            $this -> readFile($f);
        }
        //kui sisu ei olnud võimalik lugeda
        if ($this->content === false) {
            echo 'Ei suutnud lugeda faili ' . $this->file . '<br />';
        }
    }// loadFile
    // loeme sisu html malli failist
    function readFile($f){
        $this->content = file_get_contents($f);
    }// readFile
    //koostan paarid malli_elemendi_nimi => reaalne_väärtus
    function set($name, $val)
    {
        $this -> vars[$name] = $val;
    }
}// klassi lõpp
?>