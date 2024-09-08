<?php 
define("HOST", "localhost:3308");
define("USR", "root");
define("PASS", "");
define("DATABASE", "jquery");

@$db = new mysqli (HOST, USR, PASS, DATABASE);

if($db->connect_errno){
    echo $db->connect_error;
    exit();
}

echo $db->error;
?>