<?php

/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 29.03.2017
 * Time: 14:35
 */
class linkobject extends http
{
    // klassi algus
    // klassi muutujad - omadused
    var $baseUrl = false;
    var $delim = '&amp;';
    var $eq = '=';
    var $protocol = 'http://';
    // klassi meetodid
    // klassi konstruktor
    function __construct(){
        parent::__construct(); // kutsume tööle http konstruktor
        // loome põhilink
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }// konstruktor
    // andmete paari koostamine kujul
	// nimi=väärtus&nimi1=väärtus1 jne
	function addToLink($link, $nimi, $val){
    		if($link != ''){
        			$link = $link.$this->delim;
        		}
 		$link = $link.
     	}// addToLink
}// klassi lõpp
