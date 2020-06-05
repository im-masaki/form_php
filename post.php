<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="post.css">
<title>form</title>
</head>
<body>

<h2 style="text-align:center">form</h2>
<hr>
<div class="form">
<form action="write.php" method="post" style="text-align:center">
	<p>お名前： <input type="text" name="name"></p>
	<p>EMAIL： <input type="text" name="mail"></p>
	<p><textarea name="memo" rows="4" cols="40">ここに感想を記入してください。</textarea></p>
	<p><select name='age'>
		<option value='10代'>10代</option>
		<option value='20代'>20代</option>
		<option value='30代'>30代</option>
		<option value='40代'>40代</option>
		<option value='50代'>50代</option>
		<option value='60代以上'>60代以上</option>
	</select></p>
	<p>あなたは学生ですか?</p>
		<input type="radio" name="student" value="学生です">はい
		<input type="radio" name="student" value="学生ではありません">いいえ
	<br>
	<br>
	<input type="submit" value="送信">
</form>
</div>

</body>
</html>