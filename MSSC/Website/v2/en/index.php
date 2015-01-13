<?
$title='Home';
include'header.php';
$video_no = mt_rand(1, 1);
?>
<div id="home-left" style="padding-top:10px"><img src="images/smiling_logo.jpg" alt="" width="220" /></div>
<div id="home-right"><a href="../smiling.zip"><img src="images/banner.jpg" alt="" width="690" /></a></div>
<div id="home-left"><img src="images/red_bar_left.png" alt="" width="216" height="4" /></div>
<div id="home-right"><img src="images/red_bar_right.png" alt="" width="690" height="4" /></div>
<div id="home-left">
<img src="images/brown_left_bar_216x20.png" alt="" width="216" height="20" />
<script type="text/javascript" src="http://www.isa-hk.com/en/js/flowplayer-3.2.11.min.js"></script>
<a href="http://www.isa-hk.com/video<? echo $video_no?>.flv" style="display:block;width:216px;height:162px" id="player"></a>
<script>
flowplayer("player", "http://www.isa-hk.com/en/images/flowplayer-3.2.15.swf", {
	clip: {
		autoPlay: true,
		autoBuffering: true
	},
	plugins: {
		controls: {
			time: false
		}
	}

});
</script>
<img src="images/brown_left_bar_216x20.png" alt="" width="216" height="19" style="padding-top:2px" />
</div>
<div id="home-right"><img src="images/smiling_report.png" alt="" width="690" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="6,40,173,61" href="wims.php" alt="" />
    <area shape="rect" coords="7,80,172,102" href="sr_2013.php" alt="" />
    <area shape="rect" coords="6,102,171,122" href="sse_2014.php" alt="" />
    <area shape="rect" coords="591,161,680,183" href="sse_2014.php" alt="" />
  <area shape="rect" coords="7,60,172,81" href="sr_2014.php" alt="" />
  <area shape="rect" coords="6,157,170,177" href="press_2014.php" />
  <area shape="rect" coords="6,122,170,156" href="sharing_2014.php" />
  </map>
</div>
<? include'footer.php'?>