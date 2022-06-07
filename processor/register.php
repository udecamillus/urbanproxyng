<?php
    require_once('../app.php');
    if (isset($_POST['registerStaff'])) {
        $response = registerStaff($_POST);
    }
?>