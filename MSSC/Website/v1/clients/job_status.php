<?php
session_start();
if(!session_is_registered('username')) {
	header('Location: login.php');
} else {
	require_once 'header.php';

//	echo 'Login Success';
//	echo '<br />';
//	$sql = "SELECT company_name, email, tel, fax FROM members WHERE username='$username'";
//	$row = mysql_query($sql);
//	$run = mysql_fetch_array($row);
//	printf("Company Name: %s <br /> Email: %s <br /> Tel: %s <br /> Fax: %s", $run[0], $run[1], $run[2], $run[3]);

//	echo '<br />';
//	echo '<br /><a href="logout.php">Logout</a>';

}
?>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 36px;
}
.style2 {
	font-size: 12px;
	color: #CCCCCC;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body,td,th {
	font-size: 14px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="ff7d7b"><span class="style1">&nbsp;Clients System</span></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="ffa2a5"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/home_2.png',1)"><img src="images/home.png" alt="主頁" name="Image1" width="150" height="30" border="0" id="Image1" /></a><a href="mem_info.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/info_2.png',1)"><img src="images/info.png" alt="會員資料" name="Image2" width="150" height="30" border="0" id="Image2" /></a><a href="job_status.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/job_status_2.png',1)"><img src="images/job_status.png" alt="工作進度" name="Image3" width="150" height="30" border="0" id="Image3" /></a><a href="download.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/download_2.png',1)"><img src="images/download.png" alt="報告下載" name="Image4" width="150" height="30" border="0" id="Image4" /></a><a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/logout_2.png',1)"><img src="images/logout.png" alt="登出" name="Image5" width="150" height="30" border="0" id="Image5" /></a></td>
      </tr>
    </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>
		  <p>工作進度</p>
		  <p><a href="job1.php">Job1</a></p>
		  <p><a href="job2.php">Job2</a></p>
		  <p><a href="job3.php">Job3</a></p></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center" class="style2">Copyright &copy; 2009 Mystery Shopper Service Company</div></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<?php
	require_once 'footer.php';
?>