<?php
session_start();
if(isset($_POST['submit']))/* $_POST to fetch in php*/
{
	 $id=$_POST['id'];
   $_SESSION['id']=$id;
 }

$con = mysqli_connect('localhost','root','','quiz');
echo "welcome ".$_SESSION['email'];
  $q =$_SESSION['id'];

$query1="SELECT * FROM `info` WHERE `quiz_id`=$q";
$run1=mysqli_query($con, $query1);
$row1=mysqli_fetch_assoc($run1);
$qu=$row1['quizid1'];
$qv=$row1['title'];
$qw=$row1['discription'];
$timein=$row1['timein'];


$timeout=$row1['timeout'];
$_SESSION['timein']=$timein;
$_SESSION['timeout']=$timeout;
date_default_timezone_set("Asia/kolkata");
$diff=strtotime($timeout)-strtotime($timein);
$_SESSION['$diff']=$diff;
$query="SELECT * FROM `quizoid` WHERE `quizid`=$qu";
$run=mysqli_query($con, $query);
if(strtotime($timein) <strtotime(date("H:i:s",time())))
{
	$diff=strtotime($timeout)-strtotime(date("H:i:s",time()));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>question bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/displayquiz.css">

	<script>
			var secs = <?php echo $diff;?>;
			var mins = secs/60;
			var hrs= mins/60;
			function countdown() {
					setTimeout('Decrement()', 60);
			}

			function Decrement() {
					if (document.getElementById) {
							hours= document.getElementById("hours");
							minutes = document.getElementById("minutes");
							seconds = document.getElementById("seconds");
							if(minutes<59)
							{
								minutes.value=mins;
							}

							if (seconds < 59) {
									seconds.value = secs;
							}
							else {
									hours.value=gethours();
									minutes.value = getminutes();
									seconds.value = getseconds();
							}
							if (hrs < 0 ) {
									alert('time up');
									hours.value=0;
									minutes.value = 0;
									seconds.value = 0;
							}
							else {
									secs--;
									setTimeout('Decrement()', 1000);
							}
					}
			}
			function gethours(){
				hrs=Math.floor(mins/60);
				return hrs;
			}
			function getminutes() {
					mins = Math.floor(secs / 60);
					return mins-Math.round(hrs*60);
			}

			function getseconds() {
					return secs - Math.round(mins * 60);
			}

	</script>
</head>
<?php
"</br>";

"</br>";
echo date(time());
if(strtotime($timein) <= strtotime(date("H:i:s",time())) && strtotime($timeout) >= strtotime(date("H:i:s",time())))
{
	?>
	<body onload="countdown();">
	    <div>
	        Time Left ::
	        <input id="hours" type="text" style="width: 50px;">
	        <input id="minutes" type="text" style="width: 50px;">
	        <input id="seconds" type="text" style="width: 50px;">
	    </div>
	<form action="" method="post" name="login">

  <center>
    <h2>LETS BEGIN THE QUIZ</h2>
    <h2><?php echo $qv;?> </h2>
		<h4><?php echo $qw;?></h4>
  </center>
  <ol>
    <?php
    $i=1;

    while($row=mysqli_fetch_assoc($run))
    {

      ?>
        <li><?php echo $row['question'];?></li>
         <fieldset id=<?php $i; ?>>
        <input type="radio" name="<?php echo $i;?>" value="<?php echo $row['option1'];?>"><?php echo $row['option1'];?>
        <br>
        <input type="radio" name="<?php echo $i;?>" value="<?php echo $row['option2'];?>"><?php echo $row['option2'];?>
        <br>
        <input type="radio" name="<?php echo $i;?>" value="<?php echo $row['option3'];?>"><?php echo $row['option3'];?>
        <br>
        <input type="radio" name="<?php echo $i;?>" value="<?php echo $row['option4'];?>"><?php echo $row['option4'];?>
        <br>
      </fieldset>
        <?php
$i=$i+1;
}

$email=$_SESSION['email'];
$query9="SELECT * FROM `user` WHERE `email`='$email'";
$run9=mysqli_query($con, $query9);
$row9=mysqli_fetch_assoc($run9);
if($row9['role']!='admin')
{
$m=0;
$i=1;
if(isset($_POST['confirm']))
{
  $query8="SELECT * FROM `quizoid` WHERE `quizid`=$qu";
  $run8=mysqli_query($con, $query8);
    while($row8=mysqli_fetch_assoc($run8))
    {
        $op1=$_POST[$i];
        if($op1==$row8['answer'])
      {
         $m=$m+10;
     }
       $i=$i+1;
  }
     $q1= $_SESSION['email'];
     $query2="INSERT INTO `score`(`quizid`, `email`,`marks`) VALUES ('$q','$q1','$m')";
     $run2=mysqli_query($con, $query2);
      echo "<br><br><br>";
     echo "<h2>YOUR SCORES IS $m!!</h2>";
  }

    ?>
  </ol>
   <input id="con" type="submit" name="confirm" value="confirm">

 <?php
}
  ?>
   <br>
</form>

    </body>
	<?php }

	 ?>
    </html>
