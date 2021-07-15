<?php 
require_once("main/dbconnect.php"); 
if(isset($_POST['sublogin']))
{ 
$login = $_POST['loginvar'];
$password = $_POST['password'];


$sql = "SELECT *  FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
$query = "SELECT * FROM `users` WHERE  username='$login' OR password = '$password' ";
$res = mysqli_query($conn,$query);
$numRows = mysqli_num_rows($res);
if($numRows  == 1){
        $row = mysqli_fetch_assoc($res);
        if(($password )== $row['password']){
           $_SESSION["login_sess"]="1"; 
             $_SESSION["login_email"]= $row['email'];
  //header("location:account.php");
  require_once("main/account.php");     
}
        else{ 
     header("location:login.php?loginerror=".$login);
        }
    }
    else{
  header("location:login.php?loginerror=".$login);
    }
}
?>