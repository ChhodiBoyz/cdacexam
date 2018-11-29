<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php
	include 'connect.php';
	$sql="select * from uploadquestions where did=1 and chid=1";
    $result= mysqli_query($con,$sql);
    $row= mysqli_fetch_array($result);
    $num=mysqli_num_rows($result);
    $i=1;
    $totalCorrect = 0;
?>
    
	<div id="page-wrap">

        <center><h1>Chapter Quiz</h1></center>
	<?php
    while($num != 0){
            
            $answer = $_POST[$i];
            $ans=$row['ans'];       
           //echo $answer."<br>";
           //echo $ans."<br>"; 
            if ($answer == $ans) { $totalCorrect++; }
            
            
        ?>
	   
	</div>
	<?php $num--; $i++; 
     $row= mysqli_fetch_array($result);
       } 
    echo "<center><div id='results'> $totalCorrect / 5 correct</div></center>"; 
        $regno=$_SESSION['regno'];
        $sql="insert into quizresult values('$regno',1,1,'$totalCorrect')";    
        $result=mysqli_query($con,$sql);
        if($result){
            echo "<center><b>Your result have been submitted succesfully</b></center>";
        }
    ?>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>