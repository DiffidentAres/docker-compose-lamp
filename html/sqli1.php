<?php
echo <<< EOD
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>sql1-number</title>
	</head>
EOD;

$conn = mysqli_connect('mysql', 'root', 'root', 'test');
if (!$conn) {
	echo 'fail';
	exit;
}
$res = mysqli_query($conn, "select title, content from wp_news where id = " . $_GET['id']);
if (!$res) {
	echo 'empty';
	exit;
}
$row = mysqli_fetch_array($res);

echo "<center>";
echo "<h1>" . $row['title'] . "</h1>";
echo "<br>";
echo "<h1>" . $row['content'] . "</h1>";
echo "</center>";
echo "</html>";