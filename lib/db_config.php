<?php
define('HOST','127.0.0.1');
define('DBNAME', 'urbanproxy');
define('USERNAME','root');
define('PASSWORD','');

// Create connection
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;