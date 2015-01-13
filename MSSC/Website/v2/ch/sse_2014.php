<?
$title='The Awardees';
include'header.php';
$company_id=$_GET['aid'];
$company_id2=$_GET['aid']+1;
$company_id3=$_GET['aid']+2;
$company_id4=$_GET['aid']+3;
$company_id5=$_GET['aid']-3;
$year='2014';
?>
<div id="sse-left"><img src="images/sse_line_l.png" width="146" /></div>
<div id="sse-right"><img src="images/sse_line_r.png" width="760" /></div>
<div id="sse-left"><img src="images/sse_bar_l.png" width="146" border="0" usemap="#Map" />
<map name="Map" id="Map"><area shape="rect" coords="4,4,141,47" href="sse_2014.php" />
<area shape="rect" coords="4,51,141,97" href="sse_2013.php" />
</map></div>
<div id="sse-right">
<div id="sse-cert">
<?
if($company_id) {
echo "<img src='../en/cert/$year/cert_$company_id.jpg' />";
} else {
echo "<img src='../en/cert/$year/cert_0.jpg' />";
}
?>
</div>
<div id="sse-line"><img src="images/sse_line_r.png" /></div>
<div id="sse-logos">
<div id="sse-button">
<?
if($company_id > 3) {
echo "<a href='sse_2014.php?aid=$company_id5'><img src='images/sse_button_l.png' /></a>";
} else {
echo "<a href='sse_2014.php?aid=39'><img src='images/sse_button_l.png' /></a>";
}
?>
</div>
<div id="sse-company-logo">
<?
if($company_id) {
echo "<a href='sse_2014.php?aid=$company_id'><img src='logos/$year/awardee_$company_id.png' /></a>";
} else {
echo "<a href='sse_2014.php?aid=1'><img src='logos/$year/awardee_1.png' /></a>";
}
?>
</div>
<div id="sse-company-logo">
<?
if($company_id == 39) {
echo '';
} elseif($company_id) {
echo "<a href='sse_2014.php?aid=$company_id2'><img src='logos/$year/awardee_$company_id2.png' /></a>";
} else {
echo "<a href='sse_2014.php?aid=2'><img src='logos/$year/awardee_2.png' /></a>";
}
?>
</div>
<div id="sse-company-logo">
<?
if($company_id > 37) {
echo '';
} elseif($company_id) {
echo "<a href='sse_2014.php?aid=$company_id3'><img src='logos/$year/awardee_$company_id3.png' /></a>";
} else {
echo "<a href='sse_2014.php?aid=3'><img src='logos/$year/awardee_3.png' /></a>";
}
?>
</div>
<div id="sse-button">
<?
if($company_id < 37) {
echo "<a href='sse_2014.php?aid=$company_id4'><img src='images/sse_button_r.png' /></a>";
} else {
echo "<a href='sse_2014.php?aid=1'><img src='images/sse_button_r.png' /></a>";
}
?>
</div>
</div>
<div id="sse-line"><img src="images/sse_line_r.png" /></div>
</div>
<? include'footer.php'?>