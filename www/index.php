<?php
// demo //
$lines=file('demo.a');
echo "<HTML lang='RU-ru'><HEAD><meta charset=\"utf-8\"><TITLE>INDEX</TITLE></HEAD><BODY>";
echo "<h4>Список демо-файлов</h4>";
echo "<ul>";
for ($i=0; $i<count($lines); $i++) {
		list($link, $descr, $addinfo)=explode('==>', $lines[$i]);
		echo "<li><a href=".$link.">".$link."</a> - ".$descr." (".$addinfo.")</li>";
}
echo "</ul>";
echo "</BODY></HTML>";
?>