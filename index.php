<?php
/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 15.03.2017
 * Time: 13:10
 */
//võtan konfigu kasutusele
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
// kutsume menüü tööle testimiseks
require_once 'menu.php';
// tõstsime vaikimisi väljund default tegevuse sisse
require_once 'act.php';
$main_tmpl -> set('site_title', 'Veebiprogrammerimise kursus');
//kontrollime objekti sisu
echo $main_tmpl->parse();
?>