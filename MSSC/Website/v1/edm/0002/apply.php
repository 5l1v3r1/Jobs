<?
//----------------------------------------
// 程式名稱：空間申請 v3.1.2
// 程式製作：HKLCF
// 下載網址：http://hklcf.com
// 最後修改：2004/08/03
//----------------------------------------

	include('inc/header.php');



	if ($REQUEST_METHOD == "POST") {

	$adminemail = "chiufan@isa-hk.com";         //收信的電郵地址

	$msg = "公司名稱： $company_name\n公司地址： $company_address\n姓名： $name\n電話： $tel\nFax： $fax\nE-mail： $email";

	mail("$adminemail", "[索取計劃書(神秘顧客)]", "$msg", "From: $email \nReply-To: $email");
	echo "<center>非常感謝您的申請，我們會盡快回覆你的！！</center>";
	echo "<meta http-equiv='Refresh' content='3;URL=http://www.mysteryshopper.com.hk/' />";

	} else {


	include('inc/express.php');


	}


	include('inc/footer.php');

?>