<?php
    session_start();
    session_destroy();
    header("LOCATION: login(4).php");

?>