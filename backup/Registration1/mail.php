<?php
$mail=$_POST['email'];
//echo $mail;
 $to = $mail;
         $subject = "Access this link to reset your password";
         
         $message = "<b><a>reset.html</a></b>";
        
         $header = "From:sarthakkar1997@gmail.com \r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

    ?>