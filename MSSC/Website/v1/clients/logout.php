<?php
session_start();
if(!session_is_registered('username')) {
	header('Location: login.php');
} else {
	session_destroy();
	header('Location: login.php');
}
?>