<?
//----------------------------------------
// �{���W�١G�Ŷ��ӽ� v3.1.2
// �{���s�@�GHKLCF
// �U�����}�Ghttp://hklcf.com
// �̫�ק�G2004/08/03
//----------------------------------------

	include('inc/header.php');



	if ($REQUEST_METHOD == "POST") {

	$adminemail = "chiufan@isa-hk.com";         //���H���q�l�a�}

	$msg = "���q�W�١G $company_name\n���q�a�}�G $company_address\n�m�W�G $name\n�q�ܡG $tel\nFax�G $fax\nE-mail�G $email";

	mail("$adminemail", "[�ӽЯ����U�ȪA��]", "$msg", "From: $email \nReply-To: $email");
	echo "<center>�D�`�P�±z���ӽСA�ڭ̷|�ɧ֦^�ЧA���I�I</center>";
	echo "<meta http-equiv='Refresh' content='3;URL=http://www.isa-hk.com/' />";

	} else {


	include('inc/express.php');


	}


	include('inc/footer.php');

?>