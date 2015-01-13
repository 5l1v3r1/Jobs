<?
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
$counterfile = "counter.dat";

if (file_exists($counterfile)) {
	$fs = fopen($counterfile, 'r+');
	$counterlist = intval(fread($fs, filesize($counterfile)));
	strval($counterlist);
	for ($i=0; $i<strlen($counterlist); $i++) {
		$counter = str_repeat("0", 8-strlen($counterlist)) . $counterlist;
	}
	rewind($fs);
	fwrite($fs, ++$counterlist);
	fclose($fs);
} else {
	exec("echo \"1\" > $counterfile");
}

header("Content-type: image/png");
$im = @imagecreate(100, 15);
$background_color = imagecolorallocate($im, 255, 0, 0);
$text_color = imagecolorallocate($im, 255, 255, 255);
imagestring($im, 4, 2, 0, 'ISA '.$counter, $text_color);
imagepng($im);
imagedestroy($im);
?>