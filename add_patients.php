<?php


require_once("conn.php");

$first_name="Mary";
$email="mary@gmail.com";
$phone="32562342";
$last_name="Michelle";

$sql="INSERT INTO patients_t (First_name,Email,Phone,Last_name)VALUES('$first_name','$email','$phone','$last_name')";

if($conn->query($sql)==TRUE){
    echo "New record";
}else{
    echo"NO new record".$sql."<br>".$conn->error;
}
echo($sql);
?>