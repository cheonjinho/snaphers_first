<!DOCTYPE html>
<html>
<head>
	<title>SNAPHERS</title>
	<link rel="stylesheet" href="/assets/stylesheet/application.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div class="head-area">
		<div class="head-action-login">
			<div id="head-call-guide">스냅 소개</div>
			
			<? if(isset($_SESSION['loggedin'])){ ?>
				<div id="head-call-login"><a href="">안녕하세요님</a></div>
				<div id="head-call-logout"><a href="">로그아웃</a></div>
			<? } else { ?>
				<div id="head-call-login"><a href="">로그인</a></div>
				<div id="head-call-registration"><a href="">회원가입</a></div>
			<? } ?>
		</div>		
	</div>

	<div class="head-login-area">
		<div id="head-login-form"></div>
	</div>
</body>
</html>