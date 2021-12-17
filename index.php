<?php

$insert=false;
if(isset($_POST['pass'])){
   $server="localhost";
   $username="root";
   $password="";

   $con=mysqli_connect($server,$username,$password);

   if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
    }


  $username=$_POST['username'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];

  $sql="INSERT INTO `login`.`login` ( `username`, `pass`, `cpass`) VALUES ('$username', '$pass', '$cpass');";


  if($con->query($sql) == true){
    echo "Successfully inserted";
    $insert=true;
  }
  else{
    echo "not success";
  }
 
  $con->close();


  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <img  class="bg" src="bg.jpg">
   
    <div class="container">
        
       <h8>.</h8>
        <form action="index.php" method="post" class="form">
            <span><p class="sp">Sign up</p></span>
            <input type="text" name="username" id="username" placeholder="Enter a suitable username">
            <input type="password" name="pass" id="pass" placeholder="Enter secure password">
            <input type="password" name="cpass" id="cpass" placeholder="Confirm your password">
            <button class="btn">Create account</button>

        </form>

    </div>
    
</body>
</html>
