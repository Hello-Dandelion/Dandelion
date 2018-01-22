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
		<link rel="stylesheet" href="css/order.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
		<script type="text/javascript" src="js/order.js" ></script>
		<script type="text/javascript" src="js/home.js" ></script>
	</head>
	<body>
		<div id="header">
			<?php include 'nav.php' ?>
		</div>
		<div class="input-group right_search">
            <input type="text" class="form-control">
            <span class="glyphicon glyphicon-search gly_search"></span>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-2 col-sm-4" id="left_nav">
        			<p class="active">编程语言</p>
        			<p>技术纵横</p>
        			<p>架构存储</p>
        			<p>移动互联</p>
        		</div>
        		<div class="col-md-10 col-sm-8" id="right_msg">
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        			<div class="order_box">
        				<img src="order_img/order0.JPG" />
        				<span>订阅名称</span>
        				<div class="end">
        					<span class="glyphicon glyphicon-plus"></span>
        					<span>订阅</span>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        
        
        
        
        
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
