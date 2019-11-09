<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
session_start();
  	$_SESSION['txt1'] =$_POST["txt1"];
	$_SESSION['txt2'] =$_POST["txt2"];
	$_SESSION['b1'] =$_POST["b1"];
	header("Location: search.php");
  ?>
<body>
</body>
</html>