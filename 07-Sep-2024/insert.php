<?php 

include_once ("dbconfig.php");

$serializeData = $_POST['mydata'];
parse_str($serializeData , $data);
// print_r($data);

// $name = $data['name'];
// $gender = $data['gender'];
// $dob = $data['dob'];
// $email = $data['email'];
// $phone = $data['phone'];
// $address = $data['address'];

extract($data);
$db->query ("INSERT INTO students VALUES ( NULL , '$name' , '$gender', '$dob', '$email', '$phone', '$address')");

if($db->affected_rows){
    echo " Successfully Inserted";
}
?>