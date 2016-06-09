<html>
<head>
<title>RSS Feed Reader</title>
</head>
<body>
<?php
$feed = "http://feeds.feedburner.com/awwwards-sites-of-the-day?format=xml";
$entries = array();
$xml = simplexml_load_file($feed);
$entries = array_merge($entries, $xml->xpath("//item"));
?>
<div id="awwf">
<table width="100%" class="gen">
<?php
foreach($entries as $entry){
?>
<tr class="awwftr"><td width="70"><div class="dm"><div style="font-size:28px;"><?= strftime('%d', strtotime($entry->pubDate)) ?></div>
<?= strftime('%B', strtotime($entry->pubDate)) ?></div></td>
<td><div class="title"><a href="<?= $entry->link ?>"><?= $entry->title ?></a></div></td></tr>
<tr class="awwftr2"><td colspan="2">
<a href="<?= $entry->link ?>">
<div class="desc">
<?php 
$d=$entry->description;
$i1=strpos($d,"<div>");
$i2=strpos($d,"</div>");
$i2=$i2-$i1;
echo substr($d,$i1,$i2)."</div>";
?></div>
</a>
</td></tr>
<?php
}
?>
	</table>
	</div>
    </body>
    </html>