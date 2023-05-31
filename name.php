<?php
require_once("conn.php");
print_r($_POST);

$fname=$_POST["fname"];
$lname=$_POST["lname"];


$sql="INSERT INTO test_t(fname,lname) VALUES ('$fname','$lname')";

if ($conn->query($sql) === TRUE){
    echo "Succesfully inserted";
}else{
    echo "error";
}
?>
