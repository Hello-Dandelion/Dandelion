<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>响应式前端技术分享平台</title>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/shop.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<!--<script type="text/javascript" src="js/common.js" ></script>-->
		<script type="text/javascript" src="js/shop.js" ></script>
	</head>
	<body>
		<?php include 'shop_nav.php'?>
		<div class="input-group right_search">
            <input type="text" class="form-control">
            <span class="glyphicon glyphicon-search gly_search"></span>
        </div>
		
		<div class="header_line"><span class="glyphicon glyphicon-hand-right"></span>前端开发</div>
		<div class="main">
			<div class="nav_book" id="nav_book">
				<a class="book_active" href="#">HTML/CSS</a>
				<a class="two" href="#">JavaScript</a>
				<a href="#">HTML5</a>
				<a href="#">JQuery</a>
				<a href="#">开发框架</a>
			</div>
		</div>
		
		<div class="container" id="book_first">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline">
					<a href="goods_detail.php"><img class="img" src="book_img/book1.jpg" /></a>
					<h4 class="title">标题</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline addline">
					<img class="img" src="book_img/book2.jpg" />
					<h4 class="title">jQuery+Ajax学习</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline topline">
					<img class="img" src="book_img/book3.jpg" />
					<h4 class="title">微信开发</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box topline">
					<img class="img" src="book_img/book4.jpg" />
					<h4 class="title">Java Web开发</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline offtopline">
					<a href="goods_detail.php"><img class="img" src="book_img/book1.jpg" /></a>
					<h4 class="title">标题</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline offtopline addline">
					<img class="img" src="book_img/book2.jpg" />
					<h4 class="title">jQuery+Ajax学习</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offline offtopline">
					<img class="img" src="book_img/book3.jpg" />
					<h4 class="title">微信开发</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 img_box offtopline">
					<img class="img" src="book_img/book4.jpg" />
					<h4 class="title">Java Web开发</h4>
					<div class="msg">
						<p><span class="glyphicon glyphicon-usd"></span>价格</p>
						<span class="glyphicon glyphicon-comment"></span>1122评论
						<span class="glyphicon glyphicon-sort"></span>10000+销量
						<div class="three">
							<span class="glyphicon glyphicon-star"></span>收藏
							<span class="glyphicon glyphicon-shopping-cart"></span>加入购物车
							<a href="goods_detail.php">查看详情</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container ad_second">
			<div class="row">
				<div class="col-md-4 img_box">
					<a class="img" href="#"><img src="ad_img/ad1.jpg" /></a>
				</div>
				<div class="col-md-4 img_box">
					<a class="img" href="#"><img src="ad_img/ad2.jpg" /></a>
				</div>
				<div class="col-md-4 img_box">
					<a class="img" href="#"><img src="ad_img/ad3.jpg" /></a>
				</div>
			</div>
		</div>
		
		<div class="header_line"><span class="glyphicon glyphicon-hand-right"></span>其他</div>
		
		
		
		<div style="height: 800px;"></div>
		<?php include 'footer.php' ?>
		<script type="text/javascript">
			$(function(){
				var arr_txt = ['返回首页','回到顶部'];
				var arr_img = ['home','top'];
				$('#backtop .back:gt(0)').hover(function(){
					var index = $(this).index();
					$(this).text(arr_txt[index-1]).css('background','#666');
				},function(){
					var index = $(this).index();
					$(this).text('').css('background','#666 url(img/'+ arr_img[index-1] +'.png) no-repeat center');
				});
				
				var client_h = $(window).height();
				$(window).scroll(function(){
					var scroll_h = $(document).scrollTop();
					if (scroll_h >= client_h) {
						$('#backtop').fadeIn();
					} else{
						$('#backtop').fadeOut();
					}
				});
				$('#backtop .back2').click(function(){
					var scroll_top = $(document).scrollTop();
					var speed = Math.floor(scroll_top/10);
					$('html,body').animate({scrollTop:0},speed);
				});
			});
		</script>
	</body>
</html>
