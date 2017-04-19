<?php
/**
 * Created by PhpStorm.
 * User: frunnel
 * Date: 29.03.2017
 * Time: 14:53
 */
function fixUrl($val){
    	return urlencode($val);
 }

function fixDb($val)
{
    return '"'.addslashes($val).'"';
}
 ?>