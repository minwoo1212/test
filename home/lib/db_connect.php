<?php

function dbconn(){
	$host_name="localhost";
	$db_user_id="test";
	$db_name="test";
	$db_pw="qweasdzxc1";

	$connect=mysql_connect($host_name, $db_user_id, $db_pw);
		mysql_query("set names utf8", $connect); //db charset 설정
		mysql_select_db("test", $connect);

		
		if(!$connect)die("DB 연결에 실패".mysql_error());
		return $connect; //반환하거나 종료할때 사용
		
/*
		$connect=mysql_connect("호스트네임 or ip", "db유저 아이디", "비번");
		mysql_query("set names utf8", $connect);
		mysql_select_db("test", $connect);

		
		if(!$connect)die("DB 연결에 실패".mysql_error());
		return $connect; //반환하거나 종료할때 사용
*/
}
?>