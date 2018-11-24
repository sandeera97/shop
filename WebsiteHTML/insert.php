<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	$nm=$_GET["nm"];
	$ps=$_GET["ct"];
	$psr=$_GET["age"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("testing");
	mysql_query("insert into test values('$nm'), ('$ps'), ('$psr')");
	 
?>


</body>
</html>