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

// MANAGEMENT
define('MG_ROOT', ROOT . 'management/'); //management root.
define('MG_APP_ROOT', DR_ROOT . DS . 'management');
define('MG_HEADER', MG_APP_ROOT . DS . 'includes' . DS . 'header.php');
define('MG_SIDE_NAV', MG_APP_ROOT . DS . 'includes' . DS . 'side_nav.php');
define('MG_NAV', MG_APP_ROOT . DS . 'includes' . DS . 'nav.php');
define('MG_FOOTER', MG_APP_ROOT . DS . 'includes' . DS . 'footer.php');
define('MG_MODAL', MG_APP_ROOT . DS . 'includes' . DS . 'modals.php');
define('MG_SCRIPT', MG_APP_ROOT . DS . 'includes' . DS . 'scripts.php');

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
