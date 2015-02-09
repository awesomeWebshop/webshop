<?php

/* quality code! */
error_reporting(E_ALL);

/* don't do anything if SSI is already loaded */
if (defined('CMS'))
	exit;

define('CMS', 'SSI');

/* disable absolute path of ssi.php */
if( basename($_SERVER['PHP_SELF']) == 'ssi.php' )
    return exit;

/* Change directory for AJAX requests */
chdir(dirname(__file__));

/* Connect! */
require_once("./Config.php");

/* Auto load that product! */
function __autoload($class_name) {
    include './classes/'.$class_name . '.php';
}

/* Include theme */
require_once('./templates/'.$settings['template'].'/index.temp.php');

?>
