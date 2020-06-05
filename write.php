<?php

function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}


$name = $_POST["name"];
$mail = $_POST["mail"];
$memo = $_POST["memo"];
$age = $_POST["age"];
$student = $_POST["student"];
$c = ",";
$str = $name.$c.$mail.$c.$memo.$c.$age.$c.$student;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\r\n");
fclose($file);

?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<li><a href="post.php">formに戻る</a></li>
<li><a href="read.php">結果表示</a></li>

</ul>
</body>
</html>