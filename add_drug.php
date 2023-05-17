<?php
require_once("conn.php");

$name="methanol";
$price=400;
$dosage="3*1";

$sql="INSERT INTO drugs(name,price,dosage)VALUES('$name','$price','$dosage')";
if($conn->query($sql)){
    echo "New recorded drug";

}else{
    echo "No new record".$sql."<br>";
}
?>