<?php 
session_start();
$username="root";
$password="";
$database="ngoweb";


$conn=mysqli_connect('localhost',$username,$password,$database);
if($conn)
{
    echo "success";
}
else{
    die("Error: mysqli_connect-error");
}

?>