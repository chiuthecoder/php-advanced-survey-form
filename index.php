<?php
session_start();
echo session_id();
session_destroy();
// $_SESSION['name'] = "Carlos";
// setcookie('foo', 'bar', time() + 86400 * 30, '/');
?>
<html>
<head>
	<title>Survey Form</title>
<style>
input, label{
	display: block;
	padding: 5px;
}
label, input, textarea, option, select{
	width: 200px;
		margin: 5px;
}
</style>
</head>
<body>
	<form method="post" action="result.php">
	<label>Your Name:</label>
	<input type="text" name="name">

	<label>Dojo Location:</label>
	<select name="location">
		<option name="mountainView">Mountain View</option>
		<option name="seattle">Seattle</option>
	</select>

	<label>Favorite Language:</label>
	<select name="language">
		<option name="js">Javascipt</option>
		<option name="css">CSS</option>
		<option name="html">HTML</option>
	</select>

	<label>Comment (optional):</label>
	<textarea name="comment" row="5" col="5"></textarea>

	<input type="submit" value="Submit">
</body>
</html>