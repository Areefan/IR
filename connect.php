<?php
	$server="localhost";
	$user="root";
	$password="12345678";
	$link=mysql_pconnect($server,$user,$password);
	if(!$link){
		die("Can not access to Database".mysql_error());
	}
	$database=mysql_select_db("texr_analysis");
	if(!$database){
		die("Can not Select Database".mysql_error());
	}
	mysql_query("SET CHARACTER SET tis620",$link);
?>