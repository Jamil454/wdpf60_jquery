<?php 
require_once("dbconfig.php");

$id = $_POST['id'];
$delete = $db->query("DELETE FROM students WHERE id='$id'");

if($delete){
    echo " Successfully Deleted";
}
 ?>