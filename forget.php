<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>响应式前端技术分享平台</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/forget.css" />
		<link rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/step.js" ></script>
		
	</head>
	<body>
		<div id="header">
			<div class="logo-msg">
				<a href="home.php" class="logo">Dandelion</a>&nbsp;&nbsp;找回密码
			</div>
		</div>
		<div id="step">
			<p class="step_line"></p>
			<p class="step_line move_line"></p>
			<ul class="step_num">
				<li><span class="num_active">1</span></li>
				<li><span>2</span></li>
				<li><span>3</span></li>
				<li><span class="glyphicon glyphicon-ok"></span></li>
			</ul>
			<ul class="step_num step_con">
				<li class="one">填写账户名</li>
				<li class="two">验证身份</li>
				<li class="three">确认新密码</li>
				<li class="four">完成</li>
			</ul>
		</div>
		<div class="main">
			<form>
				<div class="input_box box_one">
					<span class="glyphicon glyphicon-user"></span>
					<input type="text" name="username" id="" value="" placeholder="用户名/已验证手机号" />
				</div>
				<div class="input_box box_two">
					<input type="text" name="code" id="" value="" />
					<span class="code_msg" id="show_codes">N8hp</span>
					<a href="#" class="refresh">看不清？换一张</a>
				</div>
				<div class="input_box box_three">
					<input type="button" name="step" value="提交"/>
				</div>
			</form>
		</div>
		
		<div id="footer" style="position: fixed;bottom: 0;">
			<p>我是个小小的蒲公英，出发要到远方旅行</p>
			<p>蒲公英分享平台，若发现您的版权所侵权，请及时联系我们，我们会尽快处理！</p>
			<p>Copyright &copy; 2016 All Right</p>
		</div>	
	
	
	
	
	</body>
</html>
