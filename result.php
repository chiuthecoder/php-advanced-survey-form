<?php
session_start();
// echo $_SESSION['name'];
// echo $_COOKIE['foo'];
// session_id($_GET['SESSIONID']);

?>
<html>
<head>
	<title>Survey Form</title>
<style>
input, label{
	display: block;

}
label, input, textarea, option, select, p{
	width: 200px;
	padding: 5px;
	margin: 5px;
}

</style>
</head>
<body>
	<h1>Submitted Information</h1>
	<form method="post" action="index.php">
	<label>Your Name:</label>
	<p><?= $_POST['name'] ?></p>

	<label>Dojo Location:</label>
	<p><?= $_POST['location'] ?></p>

	<label>Favorite Language:</label>
	<p><?= $_POST['language'] ?></p>

	<label>Comment (optional):</label>
	<p><?= $_POST['comment'] ?></p>

	<input type="submit" value="Go Back">
</body>
</html>