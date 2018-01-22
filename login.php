<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>响应式前端技术分享平台</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/login.css" />
		<link rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/login.js" ></script>
	</head>
	<body>
		<div id="header">
			<div class="logo-msg">
				<a href="home.php" class="logo">Dandelion</a>&nbsp;&nbsp;欢迎注册
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="banner" id="banner">
							<ul>
								<li class="img1" style="opacity: 1;"><img class="active" src="img/banner1.jpg"/></li>
								<li class="img2"><img src="img/banner2.jpg"/></li>
								<li class="img3"><img src="img/banner3.jpg"/></li>
								<li class="img4"><img src="img/banner4.jpg"/></li>
							</ul>
							<ol>
								<li class="active"></li>
								<li></li>
								<li></li>
								<li></li>
							</ol>
						</div>
					</div>
					
					
					<div class="col-md-4">
						<div class="options" id="options">
							<a href="#loginbox" class="login active">登录</a><a href="#registerbox" class="reg">注册</a>
							<span class="hr"></span>
						</div>
						<form action="#" method="post" id="loginbox" class="bs-example bs-example-form" name="loginform" role="form">
							<div class="box">
								<p class="error error1"></p>
								<div class="input-group input-group-lg">
									<input class="form-control" type="text" name="tel" value="" placeholder="输入您的手机号"/>
								</div>
							</div>
							<div class="box">
								<p class="error error2"></p>
								<div class="input-group input-group-lg">
									<input class="form-control" type="password" name="password" id="" value="" placeholder="请输入密码"/>
								</div>
							</div>
							<div class="box">
								<p class="error error3"></p>
								<div class="input-group input-group-lg">
									<input class="form-control" type="text" name="checkcode"  id="" value="" placeholder="输入右边的验证码" style="border-right: none;"/>
									<span class="input-group-addon  gly_long" id="show_codes">N8hp</span><a href="#" class="refresh"><span style="display: none;">换一张</span></a>
								</div>
							</div>
							<div class="checkbox">
							    <label>
							      <input type="checkbox" name="autologin">自动登录
							    </label>
							    <a href="forget.php">忘记密码</a>
							 </div>
							<div class="input-group input-group-lg">
								<input class="form-control type="submit" name="login" id="sub-login" readOnly="true" value="登录"/>
							</div>
							<div class="link-login">
								<img class="first" src="img/qq.png" />
								<a href="#">QQ</a>
								<img src="img/weixin.png" />
								<a href="#">微信</a>
								<img src="img/weibo.png" />
								<a href="#">微博</a>
								<a href="home.php" class="end">返回首页</a>
							</div>
						</form>
						
							
							
							
						<form action="#" method="post" id="registerbox" name="registerform" class="bs-example bs-example-form" role="form">
							<div class="box">
								<p class="error error1"></p>
								<div class="input-group input-group-lg">
									<span class="glyphicon glyphicon-user gly"></span>
									<input class="form-control setleft" type="text" name="username" id="" value="" placeholder="您的账户名和登录名"/>
								</div>
							</div>
							<div class="box">
								<p class="error error2"></p>
								<div class="input-group input-group-lg">
									<span class="glyphicon glyphicon-lock gly"></span>
									<input class="form-control setleft" type="password" name="enter_password" id="" value="" placeholder="建议使用两种字符"/>
								</div>
							</div>
							<div class="box">
								<p class="error error3"></p>
								<div class="input-group input-group-lg">
									<span class="glyphicon glyphicon-lock gly"></span>
									<input class="form-control setleft" type="password" id="" name="ask_password" value="" placeholder="请再次输入密码"/>
								</div>
							</div>
							<div class="box">
								<p class="error error4"></p>
								<div class="input-group input-group-lg">
									<input class="form-control" type="text" name="tel" id="" value="" placeholder="输入手机号获取验证码"/>
									<span class="input-group-addon gly_long setcenter" id="shortmsg" style="cursor: pointer;">短信验证</span>
								</div>
							</div>
							<div class="checkbox">
							    <label><input type="checkbox" name="agree">阅读并同意注册</label>
							</div>
							<div class="input-group input-group-lg">
								<input class="form-control type="submit" name="register" id="sub-reg" readOnly="true" value="注册"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php' ?>
	</body>
</html>
