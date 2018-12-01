<?php
    session_start();
    session_destroy();
     if (!empty($_SERVER['HTTPS']) && ('on' ==    $_SERVER['HTTPS'])) {
			$uri = 'https://';
			} else {
				$uri = 'http://';
			}
			$uri .= $_SERVER['HTTP_HOST'];
			header('Location: http://localhost/cdacpreplacement/Registration/home.php');
			exit;
?>