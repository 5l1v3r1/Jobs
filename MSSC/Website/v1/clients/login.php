<?php
session_start();
if(session_is_registered('username')) {
	header('Location: index.php');
} else {
	require_once 'header.php';

	if($_GET['action'] == 'login') {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		$username = stripslashes($username);
		$password = stripslashes($password);

		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
			$ip = getenv('HTTP_CLIENT_IP');
		} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
			$ip = getenv('REMOTE_ADDR');
		} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$last_login = date('d M Y h:i:s A');

		$sql = "SELECT * FROM members WHERE username='$username' and password='$password'";
		$result = @mysql_query($sql);

		$count = @mysql_num_rows($result);

		if($count == '1') {
			session_register('username');
			session_register('password');
			$sql = "UPDATE members SET ip='$ip', last_login='$last_login' WHERE username='$username'";
			mysql_query($sql);
			header('Location: index.php');
		} else {
			echo 'Wrong Username or Password';
			require_once 'footer.php';
		}

	} else {
		echo '
<style type="text/css">
body {
	margin:0px;
	padding:0px;
}
div#loginbox {
	background:url("images/login.png") no-repeat;
	height:260px;
	width:369px;
	margin:80px auto 0px auto;
}
div#loginbox div#logininput {
	padding-left:130px;
	padding-top:112px;
}
div#loginbox div input {
	width:200px;
}
div#loginbox div#box_password {
	padding-top:20px;
	*padding-top:16px;
}
div#loginbox div#box_submit {
	text-align:center;
	padding-top:43px;
}
</style>

<div id="loginbox">
	<form id="form1" name="form1" method="post" action="?action=login">
	<div id="logininput">
		<div id="box_username">
			<input name="username" type="text" id="username" />
		</div>
		<div id="box_password">
			<input name="password" type="password" id="password" />
		</div>
	</div>
	<div id="box_submit">
		<button id="login" name="login" type="submit">Login</button>
	</div>
	</form>
</div>
';

		require_once 'footer.php';
	}
}
?>