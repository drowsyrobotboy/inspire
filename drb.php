<html>
<head>
<title>RSS Feed Reader</title>
</head>
<body>
<?php
$feed = "www.dribbble.com/shots/popular.rss?format=xml";
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
<div class="drb">
<?php
$d=$entry->description;
$i1=strpos($d,"<img");
$i2=strpos($d,"</a>");
$i2=$i2-$i1;
echo substr($d,$i1,$i2);
?>
</div>
</div>
</a>
</div>
<?php
}
?>
    </body>
    </html>
