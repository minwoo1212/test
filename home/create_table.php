<?php
header("content-type:text/html; charset=UTF-8");

include "./lib/db_connect.php";
//include($_SERVER['DOCUMENT_ROOT']."/lib/db_connect.php");
$connect=dbconn();

	$sql="CREATE TABLE member
		(no int not null auto_increment,
		PRIMARY KEY(no),
		id char(15),
		user_id char(15),
		name char(15),
		nick_name char(15), 
		birth char(8),
		tel char(15),
		sex char(15), 
		email char(15),
		pw char(15)
		)";
	
	mysql_query($sql, $connect);
	mysql_select_db("test", $connect);
	if (!$sql)die("db테이블 생성에 실패".mysql_error());
	
	return $sql; 
?>

