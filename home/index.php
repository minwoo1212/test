<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>테이스 홈페이지</title>
	</head>
	<body>
	<table border='0' width='100%' height="100%" align="center" cellspacing="0" cellpadding="0">
	<tr>
	<td border="0" width="100%" align="center">
	<table border="1" width="100%" height="100%" align="center" cellspacing="0" cellpadding="0">
	</td>
	<tr>
	<td width="100%" height="80%" align="center" bgcolor="#764300">
	<font color='#FFFFFF'><strong> [홈페이지 상단]></strong></font>
	</td>
	<tr>
	<td width="100%" height="50" align="right">
	<a href="./member/join.php"><strong>[회원가입]</strong></a> &nbsp;	&nbsp;	
	<a href="./member/login.php"><strong>[로그인]</strong></a>
	</td>
	<tr>
	<td with="100%" height="50" align="center" bgcolor="#EDEDED">my sql 데이터 생성</td>
	<tr>
	<td with ="100%" height="30" align="left" valign="top" bgcolor="#FFFFF">
	<form action="./test2.php" name="test" method="post">
	<!--테이블 - 필드 -->
	<input type="hidden" name="id" value="test">
	<li>아이디 : <input type="text" name="user_id" size="10">
	<li>이름 : <input type="text" name="name" size="10">
	<li>비밀번호: <input type="password" name="pw" size="10">
	<br><br>
	-메모-<br> 
	<textarea name="memo" cols="100" row="5"></textarea>
	<br><br>
	<input type="submit" value="전송">
	</form>
	</td>
	
	<tr>
	<td with="100%" height="30" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
	
	<?php
	
	include("./lib/db_connect.php"); //db_connect 파일 불러오기
	$connect=dbconn();
	//쿼리문으로 데이터 불러오기
	$query="select * from bbs_1 where id='test'";
	$result=mysql_query($query, $connect);
	while($data=mysql_fetch_array($result)){
	
	//문자열자르기
	$date_Y=substr($data[regdate], 0, 4);
	$date_m=substr($data[regdate], 4, 2);
	$date_d=substr($data[regdate], 6, 2);
	?>
	<tr>
	<td with="100%" height="30" align="left" valign="top" bgcolor="#FFFFFF">
	<!--데이터 가져오기-->
	-이름 : <?=$data[name]?> <br> 
	-아이디 : <?=$data[user_id]?> <br>
	-작성일자 : <?=$date_Y?>년 <?=$date_m?>월 <?=$date_d?>일 <br>
	-메모 : <?=$data[memo]?>
	

	</td>
	<?}?>

	
	<tr>
	<td width="100%" height="100%" align="cneter" bhcolor="#FFFFFF">&nbsp;</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</body>
</html>