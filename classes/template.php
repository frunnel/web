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
        // lisame TMPL_DIR kasutusele
        $f = TMPL_DIR.$this->file; // veel üks lokaalne asendus
        if(file_exists($f) and is_file($f) and is_readable($f))
        {
            // loeme failist malli sisu
            $this->readFile($f);
        }
        // lisame .html laienduse kasutusele
        $f = TMPL_DIR.$this->file.'.html'; // veel üks lokaalne asendus
        if(file_exists($f) and is_file($f) and is_readable($f))
        {
            // loeme failist malli sisu
            $this->readFile($f);
        }

        // lisame alamkataloogid kasutusele
        		$f = TMPL_DIR.str_replace('.', '/', $this->file).'.html'; // veel üks lokaalne asendus
        		if(file_exists($f) and is_file($f) and is_readable($f))
        		{
        			// loeme failist malli sisu
        			$this->readFile($f);
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
    //set
    // html malli täitmine reaalse sisuga
    function parse(){
        $str = $this->content; // lokaalne asendus
        // vaatame malli elementide massiivi
        foreach ($this->vars as $name=>$val){
            $str = str_replace('{'.$name.'}', $val, $str);
        }
        // tagastame täis täidetud malli sisu
        return $str;
    }// parse
}// klassi lõpp
?>