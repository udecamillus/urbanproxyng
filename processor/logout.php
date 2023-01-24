<?php
require_once('../app.php');

closeConn();
session_unset();
session_destroy();

redirect(ROOT.$_GET['target']);