<?

if($action == 'am') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "聯絡姓名 : $name\n性　　別 : $gender\n年　　齡 : $age\n最高學歷 : $qualifications\n聯絡電話 : $tel\n電郵地址 : $email\n居住地區 : $district\n工作狀況 : $status\n神秘顧客經驗 : $experience\n對其他工作感興趣 : $oth_jobs";
	mail($to_email, "[應徵神秘顧客]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

if($action == 'cm') {
	$to_email = "sales@mysteryshopper.cc";
	$msg = "聯絡姓名 : $name\n公司名稱 : $company\n聯絡電話 : $tel\n電郵地址 : $email\n留　　言 : $mess";
	mail($to_email, "[留言給我們]", $msg, "From: $email \nReply-To: $email");
	header("Location: http://www.mysteryshopper.com.hk/");
}

?>