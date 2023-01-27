<?php
session_start();
define('SITE_NAME', 'Urbanproxyng');
define('SITE_URL','https://www.urbanproxyng.com');
define('ROOT', '/urbanproxyng/'); //change to / when online.
define('DR_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('LOGO',ROOT.'uploads/logo.png');
define('ICON', ROOT . 'uploads/favicon.png');
define('LOGOTEXT', ROOT . 'uploads/logo_text.png');

// Main Page
define('HEADER', DR_ROOT . DS . 'includes' . DS . 'header.php');
define('SIDE_NAV', DR_ROOT . DS . 'includes' . DS . 'side_nav.php');
define('NAV', DR_ROOT . DS . 'includes' . DS . 'nav.php');
define('FOOTER', DR_ROOT . DS . 'includes' . DS . 'footer.php');
define('MODAL', DR_ROOT . DS . 'includes' . DS . 'modals.php');
define('SCRIPT', DR_ROOT . DS . 'includes' . DS . 'scripts.php');

// APP
define('APP_ROOT', ROOT . 'app/'); //staff root.
define('APP_APP_ROOT', DR_ROOT . DS . 'app');
define('APP_HEADER', APP_APP_ROOT . DS . 'includes' . DS . 'header.php');
define('APP_SIDE_NAV', APP_APP_ROOT . DS . 'includes' . DS . 'side_nav.php');
define('APP_NAV', APP_APP_ROOT . DS . 'includes' . DS . 'nav.php');
define('APP_FOOTER', APP_APP_ROOT . DS . 'includes' . DS . 'footer.php');
define('APP_MODAL', APP_APP_ROOT . DS . 'includes' . DS . 'modals.php');
define('APP_SCRIPT', APP_APP_ROOT . DS . 'includes' . DS . 'scripts.php');

// STUDENT
define('std_ROOT', ROOT . 'student/'); //student root.
define('STD_APP_ROOT', DR_ROOT . DS . 'student');
define('STD_HEADER', STD_APP_ROOT . DS . 'includes' . DS . 'header.php');
define('STD_SIDE_NAV', STD_APP_ROOT . DS . 'includes' . DS . 'side_nav.php');
define('STD_NAV', STD_APP_ROOT . DS . 'includes' . DS . 'nav.php');
define('STD_FOOTER', STD_APP_ROOT . DS . 'includes' . DS . 'footer.php');
define('STD_MODAL', STD_APP_ROOT . DS . 'includes' . DS . 'modals.php');
define('STD_SCRIPT', STD_APP_ROOT . DS . 'includes' . DS . 'scripts.php');

require_once(DR_ROOT . DS . 'mail' . DS . 'mailhandle.php');
require_once(DR_ROOT . DS . 'lib' . DS . 'functions.php');
require_once(DR_ROOT . DS . 'lib' . DS . 'db_config.php');
