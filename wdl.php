    <html>
    <head>
    <title>RSS Feed Reader</title>
	<style>
	
	</style>
    </head>
    <body>
    <?php
    $feed = "http://webdesignledger.com/feed";
	$entries = array();
    $xml = simplexml_load_file($feed);
    $entries = array_merge($entries, $xml->xpath("//item"));
    ?>
	<table width="100%" class="gen">
<?php
foreach($entries as $entry){
?>
<tr><td width="70"><div class="dm"><div style="font-size:28px;"><?= strftime('%d', strtotime($entry->pubDate)) ?></div>
<?= strftime('%B', strtotime($entry->pubDate)) ?></div></td>
<td><div class="title"><a href="<?= $entry->link ?>"><?= $entry->title ?></a></div></td></tr>
<tr><td colspan="2">
<div class="desc"><?= $entry->description ?></div>
</td></tr>
<?php
}
?>
	</table>
    </body>
    </html>