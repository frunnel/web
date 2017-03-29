<?php

/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 29.03.2017
 * Time: 13:54
 */
class http
{
// klassi algus
    // klassi muutujad
    var $vars = array(); // http päringute andmed
    var $server = array(); // serveri andmed
    // klassi meetodid

    // klassi konstruktor
	function __construct(){
    		$this->init();
    		$this->initCont();
    	}

    // paneme algandmed paika - initsialiseerime need
    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;
    }// init

    //defineerime vajalikud konstandid
	function initCont(){
    		$consts = array('REMOTE_ADDR', 'HTTP_HOST', 'PHP_SELF', 'SCRIPT_NAME');
    		foreach ($consts as $const){
        			if(!defined($const) and isset($this->server[$const])){
            				define($const, $this->server[$const]);
            			}
 		}
 	}// initConst
}// klassi lõpp
?>
}