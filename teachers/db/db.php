<?php

$servername = "localhost";
$dbusername = "root@localhost.com";
$dbpassword = "";
$dbname = "hngi_miniclassroom";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    die("mysql FAIL");
} 

?>