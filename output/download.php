<?php
#download the file

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=file.csv');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
echo "\xEF\xBB\xBF"; // UTF-8 BOM

$file = file_get_contents("file.csv");
echo $file;

exit();

?>
