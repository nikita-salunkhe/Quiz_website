<?php
if(isset($_POST['Register']))/* $_POST to fetch in php*/
{
  $email=  $_POST['email'];
  	$password= $_POST['password'];
  	$con=mysqli_connect('localhost','root','','quiz');
    $query1="SELECT * FROM `user` WHERE `email`='$email'";
    $run=mysqli_query($con , $query1);
    $row=mysqli_num_rows($run);
  	if($row==1)
  	  echo"email already exists";
    else {
      $query="INSERT INTO `user`( `email`, `password`) VALUES ('$email', '$password')";
      $run1=mysqli_query($con , $query);
      echo '<script>alert("Registered Successfully")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="register">
	<center>
   <h1>Register</h1>
   <form action="" method="post" name="register">
       <input type="email" name="email" placeholder="email" >
       <br>
       <input type="password" name="password" placeholder="password" >
       <br>
       <input type="submit" name="Register" value="Register">
       <br>
  </form>
</center>
</div>
</body>
</html>
