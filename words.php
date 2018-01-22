<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>响应式前端技术分享平台</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/nav_common.css" />
		<link rel="stylesheet" href="css/words.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
		<script type="text/javascript" src="js/home.js" ></script>
		<script type="text/javascript" src="js/words.js" ></script>
	</head>
	<body>
		<div id="header">
			<?php include 'nav.php' ?>
		</div>
		<!--<div style="position:relative;width:100%;height: 60px;"></div>-->
		<div class="main">
			<div class="header_leave">
				<p>蒲公英，为爱好IT的朋友提供学习平台，欢迎你的加入！</p>
			</div>
			<div class="content_leave" contenteditable="true"></div>
			<div class="leave_hidden">
				<span class="emoji" id="emoji_btn"></span>
				<span class="btn">发表</span>
			</div>
			<div class="faceall">
				<!--<span class="ok ">ok</span>-->
			</div>
			<p class="leave_msg">留言(127)</p>
			<div class="show_comment">
				
			</div>
		</div>
		
		
		
		<div style="height: 400px;"></div>
		<?php include 'footer.php' ?>
		<script type="text/javascript">
			$('#nav-down li').hover(function(){
				$(this).find('.nav-downmsg').stop().slideToggle('slow');
			});
			var nav_offsettop = $('#navbar').offset().top;
			$(window).scroll(function(){
				var scrooll_h = $(document).scrollTop();
				if (scrooll_h >= nav_offsettop) {
					$('#navbar').addClass('fixednav');
				}else{
					$('#navbar').removeClass('fixednav');
				}
			});
		</script>
	</body>
</html>
