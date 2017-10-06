<?php
$lines=file('demo.a');
echo "<HTML lang='RU-ru'><HEAD><meta charset=\"utf-8\"><TITLE>INDEX</TITLE></HEAD><BODY>";
echo "<Table border=0><tr><td><h4>Файлы с вариантами на выбор</h4></td>";
echo "<td>&nbsp;</td><td><h4>Файлы с инструкциями</h4></td></tr>";
echo "<tr><td><ul>";
for ($i=0; $i<count($lines); $i++) {
		list($link, $descr, $addinfo)=explode('==>', $lines[$i]);
		echo "<li><a href=".trim($link).">".$link."</a> - ".trim($descr)." (".trim($addinfo).")</li>";
}
echo "</ul></td>";
$lines=file('instr.a');
echo "<td style='width: 60px'>&nbsp;</td>";
echo "<td><ul>";
for ($i=0; $i<count($lines); $i++) {
		list($link, $descr, $addinfo)=explode('==>', $lines[$i]);
		echo "<li><a href=".trim($link).">".$link."</a> - ".trim($descr)." (".trim($addinfo).")</li>";
}
echo "</ul></td></tr>";
echo "</Table>";
echo "</BODY></HTML>";
?>