<html>
<head>
<title>RSS Feed Reader</title>
</head>
<body>
<?php
$feed = "http://feeds.feedburner.com/behance/vorr";
$entries = array();
$xml = simplexml_load_file($feed);
$entries = array_merge($entries, $xml->xpath("//item"));
?>

<?php
foreach($entries as $entry){
?>
<div class="behtr">
<a href="<?= $entry->link ?>">
<div class="desc">
<?php 
$d=$entry->description;
$i1=strpos($d,"<img");
$i2=strpos($d,"<br />");
$i2=$i2-$i1;
$s=substr($d,$i1,$i2);
$i1=strpos($s,"15px");
$s=substr_replace($s,"0px",$i1,4);
echo $s;
?></div>
</a>
</div>
<?php
}
?>
    </body>
    </html>