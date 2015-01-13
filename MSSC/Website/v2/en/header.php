<? require'config.php'?>
<?
$pagename = substr($_SERVER['REQUEST_URI'], 3);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="description" content="" />
<meta name="keywords" content="<? echo $keywords?>" />
<meta charset="UTF-8" />
<title><? echo $title.' - '.$company?></title>
<link rel="icon" href="#" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/screen.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
</head>
<body>
<div id="siteContain">
<div id="header"><a href="./index.php"><img src="images/top_banner.png" alt="" /></a></div>
<div id="menu"><a href="index.php">Home</a> | <a href="http://www.mspa-ap.org/en/" target="_blank">Link to MSPA</a> | <a href="<? echo '../en'.$pagename?>">Eng</a> / <a href="<? echo '../ch'.$pagename?>">中文</a></div>
