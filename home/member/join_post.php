<?php
header("content-type:text/html; charset=UTF-8");
	include '../lib/db_connect.php';
	$connect=dbconn();

	$id=$_POST[id];
	$user_id=$_POST[user_id];
	$name=$_POST[name];
	$nick_name=$_POST[nick_name];
	$birth=$_POST[birth];
	$tel=$_POST[tel];
	$sex=$_POST[sex];
	$email=$_POST[email];
	$pws=$_POST[pw];
	$addr_1=$_POST[addr_1];
	$addr_2=$_POST[addr_2];

	if(!$user_id)Error("아이디를 입력하세요");
	if($user_id=substr($user_id,"12"))Error("12자리를 초과하였습니다.");	//substr 문자열 반환 ("문자열",int) => 이상은 반환
		//if(substr($user_id,"12"))Error("12자리를 초과하였습니다.");
	
//	if(preg_match("/[^a-z0-9]/i",$user_id))Error("아이디는 영문 소문자 숫자만 허용됩니다");	// ** 이거 공부 다시 하기 ;; 
//	if(preg_match("/[^a-z0-9]/i",$user_id)){
//		return "영문소문자와 숫자만 작성해주세요.";	
//}
 if(preg_match("/[^a-z0-9-_]/i", $user_id)) { return "아이디는 영문, 숫자, -, _ 만 사용할 수 있습니다."; 
	}
	
	if(!$name)Error("이름를 입력하세요");
	if(!$birth)Error("생년월일를 입력하세요");
	if(!$tel)Error("휴대폰번호를 입력하세요");
	if(!$sex)Error("성별을 체크하세요");
	if(!$email)Error("이메일를 입력하세요");
	if(!$pws)Error("비밀번호를 입력하세요");
	if(!$addr_1)Error("주소를 입력하세요");
	if(!$addr_2)Error("상세주소 입력하세요");

	$pw=md5($pws); // 비밀번호 16자리 단방향 암호화 // seed로 바꿔서 해보기!

	$regdate=date("YmdHis", time()); // 날짜 시간
	$ip=getenv("REMOTE_ADDR"); //ip

	$query="insert into member(id, user_id, name, nick_name, birth, tel, sex, email, pw, addr_1, addr_2, regdate, ip)
	values('$id', '$user_id', '$name', '$nick_name', '$birth', '$tel', '$sex', '$email', '$pw', '$addr_1', '$addr_2', '$regdate', '$ip')";
	mysql_query("set names utf8", $connect);
	mysql_query($query, $connect);
	mysql_close; //mysql 끝내기 

?>

<script>

	window.alert("회원가입 완료되었습니다");
	location.href='../index.php';

</script>
