
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/Loginstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  
    <title>ngo web</title>
  </head>
  <body>

 
  <?php require_once 'main/dbconnect.php' ?>
<div class="container">
  <div class="login_form"> 
    <div class="row">
  <?php
   if(isset($_POST['signup']))
   {
     extract($_POST);
     if(strlen($fname)<3)
     {
       $error[]='Please enter first name using 3 characters atleast';
     }
     if(strlen($fname)>20)
     {
       $error[]=' First name : max length 20 character not allowed';
     }
     if(!preg_match("/^[A-Za-z_]*[A-Za-z ]+[A-Za-z_]*$/",$fname))
     {
       $error[]='Invlid Entry First Name.please Enter letters without any digit pr special symbols like(
         1,2,3,#,$,%,&,!,~,`,^,-,)';
      }
      if(strlen($lname)<3)
      {
        $error[]='Please enter Last name using 3 characters atleast';
      }
      if(strlen($lname)>20)
      {
        $error[]=' Last name : max length 20 character not allowed';
      }
      if(!preg_match("/^[A-Za-z_]*[A-Za-z ]+[A-Za-z_]*$/",$fname))
      {
        $error[]='Invlid Entry Last Name.please Enter letters without any digit pr special symbols like(
          1,2,3,#,$,%,&,!,~,`,^,-,)';
       }
       if(strlen($username)<3)
     {
       $error[]='Please user name using 3 characters atleast';
     }
     if(strlen($username)>30)
     {
       $error[]=' user name : max length 30 character not allowed';
     }
     if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/",$username))
     {
       $error[]='Invlid User Name ,please Enter lower case letter without any space and No number at the start-Eg-myuserame,okuniqueuser or myusernmaem123';
         
      }
     
      if(strlen($email)>50)
      {
        $error[]=' Email : max length 50 character not allowed';
      }
      if($passwordconfirm=='')

      {
        $error[]=' Please confirm password';
      }

      if($password!= $passwordconfirm)

      {
        $error[]=' Please do not match';
      }
      if(strlen($password)<5)

      {
        $error[]=' password should be 6 character long';
      }
      if(strlen($password)>20)

      {
        $error[]=' password :max length 20 characters not allowed';
      }


      $sql ="select * from users where (username='$username' or email='$email');";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res) >0)
      {
        $row=mysqli_fetch_assoc($res);
        if($username==$row['username'])
        {
          $error[]='username already Exists';

        }
        if($email==$row['email'])
{
  $error[]="Email already Exists";
}
      }
     if(!isset($error))
     {
       $date=date('Y-m-d');
       //$options=array("cost"=>4); //to convert passwod in hashcode 
       //$password=password_hash($password,PASSWORD_BCRYPT,$options);
       
//insert values in db
$sql="INSERT INTO `users` VALUES('','$fname','$lname','$username','$email','$password','$date');";
       $result=mysqli_query($conn,$sql);
                if($result)
       {
         $done=1; //if value is set
       }
       else
       {
         $error[]='Failed: something went wrong';
       }
      
    } 
}
?>
    <div class="col-sm-4">
    <?php
    if(isset($error))
    {
      foreach($error as $error)
      {
        echo'<p class= "errmsg">&#x26A0;'.$error.'</p>';
      }
    }
    
    ?>
    </div>
    <div class="col-sm-4">

    <?php
if(isset($done))
    {?>
    <div class="sucessmsg">
    <span style="font-size:100px;">&#9989;</span>
    <br> you have registered successfully.<br> 
    <a href="login.php">Login here..</a>
    </div>
    <?php } else { ?>
     
      
    <div class="cont">
  <div class="s-signup ">
  <label>
  <form action="" method="post">
  <img src="images\logo.png" width="146 px" height="83 px" class="center">
  <h2> Sign Up</h2>
      

   
  <div class="form-group">
    <label for="exampleInputEmail1"> First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" Required=""  value=<?php if(isset($error)) { echo $fname;} ?> >
</div>
<div class="form-group">
    <label for="exampleInputEmail1"> Last Name</label>
    <input type="text" class="form-control"   id="lname" name="lname"  Required=""value=<?php if(isset($error)) { echo $lname; }?>  >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">  User Name</label>
    <input type="text" class="form-control"  id="username" name="username" Required=""  value=<?php if(isset($error)) { echo $username; }?>>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">  Email </label>
    <input type="email" class="form-control"  id="email" name="email"  Required="" value=<?php if(isset($error)) { echo $email;} ?>>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  id="password" name="password" placeholder="" Required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> Conform Password</label>
    <input type="password" class="form-control"  id="passwordconfirm" name="passwordconfirm" placeholder="" Required="">
  </div>
  
  <button type="submit" class="submit" name="signup" class="btn btn-primary form-btn">Signup</button>

</form>
<p class="forgot-pass">  Have an account? <a href="login.php"> Login </a> </p>
<?php } ?>
</div>
</div>
    

    
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
