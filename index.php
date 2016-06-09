<!DOCTYPE html>
<html>
<head>
<title> Inspire. </title>
<link href="images/favicon.png" type="image/png" rel="icon" />
<link href="css/mars.css" type="text/css" rel="stylesheet" />
<link href="css/normalize.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="top">
<div style="height:50px;margin-left:20px;" ><img src="images/logo.svg" height="100%"/></div>
<input type="text" id="input" />
</div>
<div class="wrapper">
<h1 style="text-align:center;font-weight:300;color:#34ABC9;margin-top:-10px;"><b> INSPIRE - </b> <b>Latest</b> from your <b>favourite</b> sites.</h1>
<table width="500" class="table1">
<tr>
<td class="tab" id="aww" onclick="ldf1('aww')">Awwwards</td>
<td class="tab" id="beh" onclick="ldf1('beh')">Behance</td>
<!--<td class="tab" id="drb" onclick="ldf1('drb')">Dribble</td>-->
</tr>
<tr class="frame">
<td colspan="3" id="frame1">
<div></div>
</td>
</tr>
</table>
<table width="370" class="table2">
<tr>
<td class="tab" id="wdd" onclick="ldf2('wdd')">WDDepot</td>
<td class="tab" id="wdl" onclick="ldf2('wdl')">WDLedger</td>
<td class="tab" id="1wd" onclick="ldf2('1wd')">1stWebdesigner</td>
</tr>
<tr class="frame">
<td colspan="3">
<div id="frame2"></div>
</td>
</tr>
</table>
<table width="370" class="table2">
<tr>
<td class="tab" id="css" onclick="ldf3('css')">CSS Tricks</td>
<td class="tab" id="msh" onclick="ldf3('msh')">Mashable</td>
<td class="tab" id="net" onclick="ldf3('net')">.Net</td>
<td class="tab" id="ign" onclick="ldf3('ign')">IGN</td>
</tr>
<tr class="frame">
<td colspan="4">
<div id="frame3"></div>
</td>
</tr>
</table>
</div>
<script type="text/javascript">
function ldf1(id)
{
 $('#frame1').load('empty.php');
 $('#aww').removeClass('current');
 $('#beh').removeClass('current');
 $('#drb').removeClass('current');
 $('#'+id).addClass('current');
 $('#frame1').load(id+'.php');
}
function ldf2(id)
{
 $('#frame2').load('empty.php');
 $('#wdd').removeClass('current');
 $('#wdl').removeClass('current');
 $('#1wd').removeClass('current');
 $('#'+id).addClass('current');
 $('#frame2').load(id+'.php');
}
function ldf3(id)
{
 $('#frame3').load('empty.php');
 $('#msh').removeClass('current');
 $('#css').removeClass('current');
 $('#ign').removeClass('current');
 $('#net').removeClass('current');
 $('#'+id).addClass('current');
 $('#frame3').load(id+'.php');
}
$(document).ready(function() {
	$('#frame1').load('aww.php');
	$('#frame2').load('wdd.php');
	$('#frame3').load('css.php');
	$('#wdd').addClass('current');
	$('#aww').addClass('current');
	$('#css').addClass('current');
});
</script>
</body>
</html>
