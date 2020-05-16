<?php
session_start();
$email=$_SESSION['email'];
echo "<center><h1>Welcome ".$_SESSION['email']."</h1></center>";
$con = mysqli_connect('localhost','root','','quiz');
$query="SELECT * FROM `info` WHERE 1 ";
$run=mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>question bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/quizid.css">
</head>
<body>
	<div class="opbox">
	<center>
	<table>
		<th>Quiz ID</th>
		<th></th>
		<th> Title</th>
  <?php
  while($row=mysqli_fetch_assoc($run))
  {
  ?>
<tr>
	<form action="displayquiz.php" method="post" name="$quizid">

	<td><?php echo $row['quiz_id'];?></td>
	<td></td>
	<td><?php echo $row['title'];?></td>
</form>
</tr>
    <?php
 }
?>
</table>
<br>
<form action="displayquiz.php" method="post" name="View Quiz">
Quiz id:<input type="text" name="id" placeholder="View Quiz">
<br>
<input type="submit" name="submit" value="submit">
</form>
  <?php
	$query9="SELECT * FROM `user` WHERE `email`='$email'";
	$run9=mysqli_query($con, $query9);
	$row9=mysqli_fetch_assoc($run9);
	if($row9['role']=='admin')
	{
		?>
    <form action="information.php" method="post" name="Add Quiz">
    To Add Quiz:<input type="submit" name="Login" value="Add Quiz">
</form>
<?php
}
 ?>
</center>
</div>
  </body>
  </html>
