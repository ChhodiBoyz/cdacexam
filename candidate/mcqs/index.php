<?php
	include 'connect.php';
	
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Chapter Quiz</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
			
			<?php
				$sql = "select * from uploadquestions where did=1 and chid=1";
				$result = mysqli_query($con,$sql);
				
				while($row = mysqli_fetch_assoc($result)){
					
				
			?>
            
                <li>
                
                    <h3><?php echo $row["question"];?></h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) <?php echo $row["op1"];?></label><br>
						<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) <?php echo $row["op2"];?></label><br>
						 <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) <?php echo $row["op3"];?></label><br>
						<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) <?php echo $row["op4"];?></label><br>
                    </div>
                
                </li>
				<?php }?>
                
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	
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