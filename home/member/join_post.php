<?php
header("content-type:text/html; charset=UTF-8");
include "../lib/db_connect.php";
$connect=dbconn();

$id=$_POST[id];
$user_id=$_POST[user_id];
$name=$_POST[name];
$nick_name=$_POST[nick_name];
$birth=$_POST[birth];
$tel=$_POST[tel];
$sex=$_POST[sex];
$email=$_POST[email];
$pw=$_POST[pw];
$addr_1=$_POST[addr_1];
$addr_2=$_POST[addr_2];
$regdate=date("Ymdhis", time()); // 날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip

$query="instert into memeber(id, user_id, name, nick_name, birth, sex, tel, email, pw, addr_1, addr_2, regdate, ip)
value('$id', '$user_id', '$name', '$nick_name', '$birth', '$tel', '$sex', '$email', '$pw', '$addr_1', '$addr_2', '$regdate', '$ip')";
mysql_query("set_name_utf8",$connect); 
mysql_query($query, $connect);
mysql_close; //mysql 끝내기
?>

<script>

window.alert("쿼리 정상 전송 완료");
location.href='../index.php';


</script>