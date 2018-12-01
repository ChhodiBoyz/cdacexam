<?php
	require "db-connect.php";
	$regno = $_GET["regno"];
	$confirmcode = $_GET["confirmcode"];
	$query = mysqli_query($con,"SELECT * FROM registered_users WHERE cid=$regno");
	$row = mysqli_fetch_assoc($query);
	$db_code = $row['confirmed_code'];
	//echo $db_code;
	if($confirmcode==$db_code)
	{
		//$sql = "UDPATE registered_users SET COFIRMED=1";

		mysqli_query($con,"UPDATE registered_users SET confirmed=1 where cid=$regno");
		mysqli_query($con,"UPDATE registered_users SET confirmed_code =0 where cid=$regno");
		echo "<h1>Registration confirmed!<h1>";
		header('Location: http://localhost/cdacexam/Registration/home.php');
		
	}else{
		echo "Confirm code error";
	}

?>