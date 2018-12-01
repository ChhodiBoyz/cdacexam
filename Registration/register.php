<?php
    include 'db-connect.php';
    $regno=$_POST['regno'];
    $pwd=$_POST['password'];
    $filename=$_FILES['photo']['name'];
    $tmpname=$_FILES['photo']['tmp_name'];
    $photo=$regno.".jpg";
	$status=move_uploaded_file($tmpname,"profile/pages/uploads/$photo");
    //echo $regno.$pwd;
    $repeatpwd=$_POST['repeatpassword'];
    //$sql="select * from registered_users where cid='$regno'";
	$stmt = $con->prepare("SELECT * FROM registered_users where cid=?");
			$stmt->bind_param("s",$regno);
			$stmt->execute();
			$stmt->store_result();
    //$result=mysqli_query($con,$sql);
    //$count=mysqli_num_rows($result);
    //echo $count;
    $salt='abcdefghijklmnopqrstuvwxyz1234567890';
                $str='';
                //echo $salt[0];
                for($i=0;$i<=35;$i++){
                    $num1=rand(0,35);
                    //echo $num1;
                    $str=$str.$salt[$num1];
                    //echo $str;
                   // echo $salt[$num1].'<br/>';
                    $str=$str.$salt[$num1];
                }
                $pwd=$pwd.$str;
                $pwd=base64_encode($pwd);
                $repeatpwd=$repeatpwd.$str;
                $repeatpwd=base64_encode($repeatpwd);

    if($stmt->num_rows==0){
		$sql = "SELECT * FROM candidate WHERE cid='$regno'";
				$result1 = mysqli_query($con,$sql);
				
			if(mysqli_num_rows($result1)>0)
			{
				while($row = mysqli_fetch_assoc($result1))
				{
					$cname = $row['cname'];
					$email = $row ['email'];
					$contact = $row['phno'];
				}
				
				$confirmcode = rand();
				$sql1 = "INSERT INTO registered_users VALUES('$regno','$cname','$pwd','$email','$contact',0,'$confirmcode','$str','$photo')";
				
				$result2 = mysqli_query($con,$sql1);
				if($result2)
				{
                    //echo "In here";
					$message="
                    
					Confirm your registration!!
                    Click on the link below.
                    http://localhost/cdacexam/Registration/emailconfirmation.php?regno=$regno&confirmcode=$confirmcode
					";
					
					require 'PHPMailer/PHPMailerAutoload.php';

					$mail = new PHPMailer(true);
					try{
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = 'cdacexam20@gmail.com';
					$mail->Password = 'bhenchod@98';
					//;$mail->SMTPSecure =
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to conect to

					$mail->setFrom('cdacexam20@gmail.com', 'Admin');
					$mail->addAddress($email);               // Name is optional

					$subject = "Confirm Your Mail!!";
					$mail->Subject = $subject;
					$mail->Body    = $message;
					
					if($mail->send()){
					header('Location: http://localhost/cdacexam/Registration/checkConfirmation.php');
					$stmt->close();
				}else {
					echo "<h1>Mail Server Error</h1>";
				}
				
				}catch (phpmailerException $e)
					{
						echo "<h1>Mail Server Error</h1>";
					}
				}else {
				echo 'ERROR :'.mysqli_error($con);
				}
			}else {
				echo 'Student is not registered!';
			}
    }
    else{
        header("LOCATION: buyer_register.php?msg=user already exists");
    }
?>