<?php
require_once '../header.php';

if($_GET['action'] == 'submit') {
	if($_POST['password1'] != $_POST['password2']) {
		echo 'Password Error';
	} else {
		$username = $_POST['username'];
		$password = md5($_POST['password2']);
		$company_name = $_POST['company_name'];
		$email = $_POST['email'];
		$ip = 'N/A';
		$tel = $_POST['tel'];
		$fax = $_POST['fax'];
		$last_login = 'N/A';
		$address = $_POST['address'];

		$sql = "INSERT INTO members VALUES ('', '$username', '$password', '$company_name', '$email', '$ip', '$tel', '$fax', '$last_login', '$address');";
		$result = mysql_query($sql);

		if(!$result) {
			echo "DB Error, could not query the database\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
	}
} else {
	echo '
<form action="?action=submit" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
Username : 
<label>
<input name="username" type="text" id="username" />
</label>
<br />
Password : 
<label>
<input name="password1" type="password" id="password1" />
</label>
<br />
Re-Password : 
<label>
<input name="password2" type="password" id="password2" />
</label>
<br />
Company Name : 
<label>
<input name="company_name" type="text" id="company_name" />
</label>
<br />
Email : 
<label>
<input name="email" type="text" id="email" />
</label>
<br />
Tel : 
<label>
<input name="tel" type="text" id="tel" />
</label>
<br />
Fax : 
<label>
<input name="fax" type="text" id="fax" />
</label>
<br />
Address : 
<label>
<input name="address" type="text" id="address" />
</label>
<p>
  <label>
  <input type="submit" name="Submit" value="送出" />
  </label>
  <label>
  <input type="reset" name="Submit2" value="重設" />
  </label>
</p>
</form>
';

	require_once '../footer.php';
}
?>