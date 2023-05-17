<?php
$conn=new mysqli("localhost","root","","patients");
//connecting to a database
if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}else{
echo "connected succesfully";
}


?> 