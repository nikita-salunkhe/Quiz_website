<?php
session_start();
$con = mysqli_connect('localhost','root','','quiz');
if(isset($_POST['submit']))
{
  $unique=time();
  $title=  $_POST['title'];
  $quiz_id=  $_POST['quiz_id'];
	$name= $_POST['name'];
  $timein=  $_POST['timein'];
  $_SESSION['timein']=$timein;
  $timeout=  $_POST['timeout'];
  $_SESSION['timeout']=$timeout;
  $discription=  $_POST['discription'];


  $con = mysqli_connect('localhost','root','','quiz');
  $query="INSERT INTO `info`(`quiz_id`,`quizid1`,`title`, `name`, `timein`, `timeout`, `discription`) VALUES ('$quiz_id','$unique','$title','$name','$timein','$timeout','$discription')";
  $run=mysqli_query($con,$query);

for($i=0;$i<3;$i++)
{
    $question= $_POST['question'][$i];
  	$option1= $_POST['option1'][$i];
  	$option2= $_POST['option2'][$i];
  	$option3= $_POST['option3'][$i];
    $option4=$_POST['option4'][$i];
    $answer=$_POST['answer'][$i];
    $con = mysqli_connect('localhost','root','','quiz');
    $query="INSERT INTO `quizoid`(`quiz_id`, `quizid`,`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ('$quiz_id','$unique','$question','$option1','$option2','$option3','$option4','$answer') " ;
    $run1=mysqli_query($con , $query);
}
echo '<script>alert("Quiz added sucessfully")</script>';
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/information.css">
</head>
<body>
  <div class="opbox1">
   <form action="" method="post" name="login">
  <div class="info">
		<center>
     <h1>ABOUT QUIZ</h1>

         <input type="text" name="title" placeholder="title of quiz">
         <br>
         <input type="text" name="quiz_id" placeholder="quiz ID">
         <br>
         <input type="text" name="name" placeholder="name of admin">
         <br>
         <div class="a">
         <label for="time in">Quiz starts at:</label>
         <input type="time" name="timein">
       </div>
         <br>
         <div class="a">
         <label for="time out">Quiz ends at:</label>
         <input type="time" name="timeout">
       </div>
         <br>
         <input type="text" name="discription" placeholder="discription">
         <br>

	</center>
  </div>
<center>
  <center>
       <h1>LET'S START THE QUIZ</h1>
  </center>
  <?php
for($i=0;$i<3;$i++)
{
   ?>
       <center>
         <h2>Question<?php echo $i+1;?></h2>
      </center>
      <center>

         <input type="text" name="question[]" placeholder="question">
      </center>
         <br>
      <center>
       <input type="text" name="option1[]"  placeholder="option1">
       <br>
       <input type="text" name="option2[]"  placeholder="option2">
       <br>
       <input type="text" name="option3[]"  placeholder="option3">
       <br>
       <input type="text" name="option4[]"  placeholder="option4">
       <br>
   </center>
         <p>Answer</p>
         <input type="text" name="answer[]"  placeholder="answer">
         <br>
<?php }
 ?>
      <input type="submit" name="submit" value="submit">
  </form>

</center>
</div>
</body>
</html>
