<?php
/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 15.03.2017
 * Time: 15:24
 */
//vajalike konstantide defineerimine
define('CLASSES_DIR', 'classes/'); //classes kataloogi nime konstand
define('TMPL_DIR', 'tmpl/'); //tmpl kataloogi konstant
define('LIB_DIR', 'lib/'); // lib kataloogi nime konstant
define('ACTS_DIR', 'acts/'); // acts kataloogi nime konstant
define('DEFAULT_ACT', 'default'); // vaikimisi tegevuse faili nime konstant
//võtame kasutusele vajalikud abifailid
require_once LIB_DIR.'utils.php';
//võtame kasutusele vajalikud failid
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
// loome vajalikud objektid projekti tööks
$http = new linkobject();
?>