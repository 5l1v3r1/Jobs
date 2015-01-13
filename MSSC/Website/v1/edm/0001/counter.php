<?
if(@$id == '001') {
	@header("Expires: -1");
	@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
	@header("Pragma: no-cache");
	header("Location: http://www.mysteryshopper.com.hk/counter/");
	exit();
} elseif(@$id == '002') {
	@header("Expires: -1");
	@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
	@header("Pragma: no-cache");
	header("Location: http://www.mysteryshopper.com.hk/counter/index001.php");
	exit();
} else {
	echo "Status: 404 Not Found";
}
?>