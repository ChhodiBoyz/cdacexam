<?php
    $con=mysqli_connect("localhost","root","");
    if(!$con){
        die("database connection error");
    }
    $db_status=mysqli_select_db($con,"cdacexamproject");
    if(!$db_status){
        die("database not found");
    }
?>