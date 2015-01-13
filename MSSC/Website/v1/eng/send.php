<?

if($action == 'am') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "Name : $name\nGender : $gender\nAge : $age\nQualifications : $qualifications\nTel : $tel\nEmail : $email\nDistrict : $district\nWorking Status : $status\nMystery Shopper Experience : $experience\nInterest in other jobs : $oth_jobs";
	mail($to_email, "[Apply Mystery Shopper]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

if($action == 'mm') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "Name : $name\nCompany : $company\nTel : $tel\nEmail : $email\nMessage : $mess";
	mail($to_email, "[Message Us]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

?>