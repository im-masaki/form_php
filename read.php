<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
</head>

<body>

<?php

function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

$filename = 'data/data.txt';
$file = fopen($filename, 'r');

?>

<h2>結果</h2>

  <table border='1'>
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>備考</th>
      <th>年齢</th>
      <th>学生</th>
    </tr>

<?php

while(!feof($file)){
  $csv = fgets($file);
  $str = explode(",", $csv);

?>

    <tr>
      <td><?= h($str[0]); ?></td>
      <td><?= h($str[1]); ?></td>
      <td><?= h($str[2]); ?></td>
      <td><?= h($str[3]); ?></td>
      <td><?= h($str[4]); ?></td>
    </tr>

<?php

}
fclose($file);

?>

</table>
<br>
<br>
<li><a href="post.php">formに戻る</a></li>


</body>
</html>