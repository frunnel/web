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
//malli_element => väärtus
$main_tmpl -> set('user', 'Kasutajanimi');
$main_tmpl -> set('title', 'Pealeht');
$main_tmpl -> set('lang_bar', 'Keeleriba');
$main_tmpl -> set('menu', 'Lehe peamenüü');
$main_tmpl -> set('content', 'Lehe sisu');
//kontrollime objekti sisu
echo '<pre>';
print_r($main_tmpl);
?>