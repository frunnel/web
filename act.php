<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 12.04.2017
 * Time: 8:47
 */
$act = $http->get('act'); // küsime hetkel valitud tegevus
// koostame otsitava faili nimi - failisüsteemi jaoks
$fn = ACTS_DIR.str_replace('.', '/', $act).'.php';
// kui selline fail olemas ja lugemiseks lubatud
if(file_exists($fn) and is_file($fn) and is_readable($fn)){
    // loeme sisu
    require_once $fn;
} else {
    $fn = ACTS_DIR.'default'.'.php';
    require_once $fn;
}