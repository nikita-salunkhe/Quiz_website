<?php
session_start();
if(isset($_POST['Login']))/* $_POST to fetch in php*/
{
  $email=  $_POST['email'];
	$password= $_POST['password'];
  $con=mysqli_connect('localhost','root','','quiz');
	$query="SELECT * FROM `user` WHERE `email` = '$email'AND  `password` = '$password' AND `role`='admin'";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row==1){
   $_SESSION['email']=$email;
	  header('location:quizid.php');
  }
  else{

	  $query1="SELECT * FROM `user` WHERE `email` = '$email'AND  `password` = '$password'";
	  $run=mysqli_query($con,$query1);
   	$row=mysqli_num_rows($run);
	  if($row==1)
    {
       $_SESSION['email']=$email;
	      header('location:quizid.php');
      }
    else {
		   echo "logined  failed";
	   }
}
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="login">
		<center>
     <h1>Login</h1>
     <form action="" method="post" name="login">
         <input type="email" name="email" placeholder="email" >
         <br>
         <input type="password" name="password" placeholder="password">
         <br>
         <input type="submit" name="Login" value="Login">
    </form>
    <form action="registration.php" method="post" name="login">
    <h3>Don't have an account yet?</h3>
      <button type="submit" name="register" class="btn btn-success">Register here</button>
    </form>
  </div>
	</center>
  </div>
</body>
</html>
