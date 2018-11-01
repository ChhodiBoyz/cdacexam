<?php
	session_start();
    include 'db-connect.php';
    $regno=$_POST['regno'];
	$_SESSION["regno"] = $regno;
    $password=$_POST['pwd'];
    echo $name,$password;
    $sql="select * from registered_users where cid='$regno'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        $row=mysqli_fetch_array($result);
        $salt=$row['salt'];
        $password=$password.$salt;
        $password=base64_encode($password);
        if($password==$row['password']&&$row['confirmed']==1){
            echo "success";
        }else{
            header("LOCATION: login(4).php?msg=INAVLID USERNAME OR PASSWORD");
        }
        
    }
?>