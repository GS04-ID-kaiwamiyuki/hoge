<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>fputs</title>
</head>
<body>
<?php
/* ------------------------------------------------------------------------
■例 ファイル読み込み
fputs.php

■実例；
$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];
$comment = $_POST["comment"];
$str = $name.",".$mail.",".$age.",".$comment."\n";

$file = fopen("data/data.txt","a");
flock($file, LOCK_EX);
fputs($file,$str);
flock($file, LOCK_UN);
fclose($file);

------------------------------------------------------------------------ */

//以下に記述してみましょう

$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];
$str = $name.",".$mail.",".$age."\n";

$file = fopen("data/data.txt","a");
flock($file, LOCK_EX);
fputs($file,$str);
flock($file, LOCK_UN);
fclose($file);

?>
ファイルの中を確認してください。
</body>
</html>
