<?php
/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 15.03.2017
 * Time: 13:10
 */
require_once 'conf.php';
//conf.php faili kasutamine
echo '<h1>Veebiprogrammerimine</h1>';
//valmistame peatemplate
$main_tmpl = new template('main');
echo '<pre>';
print_r($main_tmpl);
?>