<?

if($action == 'am') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "�p���m�W : $name\n�ʡ@�@�O : $gender\n�~�@�@�� : $age\n�̰��Ǿ� : $qualifications\n�p���q�� : $tel\n�q�l�a�} : $email\n�~��a�� : $district\n�u�@���p : $status\n�����U�ȸg�� : $experience\n���L�u�@�P���� : $oth_jobs";
	mail($to_email, "[���x�����U��]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

if($action == 'cm') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "�p���m�W : $name\n���q�W�� : $company\n�p���q�� : $tel\n�q�l�a�} : $email\n�d�@�@�� : $mess";
	mail($to_email, "[�d�����ڭ�]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

?>