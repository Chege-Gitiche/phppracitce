<?php
require_once("conn.php");

$sql="SELECT * FROM `test_t`";

$result=$conn->query($sql);

print_r($result);
echo "<br>";

$row=$result->fetch_assoc();

print_r($row);
echo "<br>";

echo $row["fname"];
echo "<br>";

foreach($row as $key => $value){
    echo "First name is".$key."Last name is".$value;
}
?>