<?php
// demo //
$lines=file('demo.a');
echo "<ul>";
for ($i=0; $i<count($lines); $i++) {
		list($link, $descr, $addinfo)=explode('=>>', $lines[$i]);
		echo "<li><a href=".$link.">".$link."</a> - ".$descr." (".$addinfo.")</li>";
}
echo "</ul>";
?>