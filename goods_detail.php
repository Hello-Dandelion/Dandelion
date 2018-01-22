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
		<link rel="stylesheet" href="css/goods_detail.css" />
		<script type="text/javascript" src="js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="js/goods_detail.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
		<script type="text/javascript" src="js/shop.js" ></script>
	</head>
	<body>
		<?php include 'shop_nav.php'?>
		<div class="look_trail">
			<p>商城<span> &gt; </span>前端开发<span> &gt; </span>书籍详情</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 book_img" id="show_book">
					<img class="big_img" src="detail_img/b0.jpg" />
					<div class="book_more">
						<div class="move_img">
							<img src="detail_img/b0.jpg" />
							<img src="detail_img/b1.jpg" />
							<img src="detail_img/b2.jpg" />
							<img src="detail_img/b3.jpg" />
							<img src="detail_img/b4.jpg" />
							<img src="detail_img/b5.jpg" />
						</div>
						<span class="btns left"><</span>
						<span class="btns right">></span>
					</div>
					<p class="notice"></p>
				</div>
				<div class="col-md-8 msg_box">
					<h4>标题</h4>
					<p><span>作者：</span><span>出版社：</span><span>时间：</span></p>
					<p class="star_com">
						<span class="glyphicon glyphicon-star active"></span>
						<span class="glyphicon glyphicon-star active"></span>
						<span class="glyphicon glyphicon-star active"></span>
						<span class="glyphicon glyphicon-star active"></span>
						<span class="glyphicon glyphicon-star-empty"></span>
						1234评论
					</p>
					<div class="price_book">
						<span class="price_title">抢购价</span>
						<p class="price_msg">&yen;32.30 <span class="discount">4.9折</span> <span class="original">定价&yen;65.90</span></p>
						<p class="price_time">离结束时间<span class="hour"></span>时<span class="minute"></span>分<span class="second"></span>秒 <a href="#">查看更多限时抢购商品</a></p>
					</div>
					<p>服务 今日在20:20分之前，预计在12月18号之前可送达</p>
					<div class="link_goods">
						<p class="one">关联商品</p>
						<div class="spans">
							<span class="goods_active">商品0000000000</span>
							<span>商品1111111111</span>
							<span>商品2222222222</span>
							<span>商品3333333333</span>
							<span>商品4444444444</span>
							<span>商品5555555555</span>
							<span>商品6666666666</span>
							<span>商品7777777777</span>
						</div>
					</div>
					<div class="add_goods">
						<a href="#">关注该商品</a>
						<a href="#">加入购物车</a>
						<span class="reduce">-</span>
						<span class="shownum">1</span>
						<span class="add">+</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="goods_detail">
			<a class="book_active">商品详情</a>
			<a>商品评论(41)</a>
			<a>商品问答(0)</a>
			<span class="add">
				<span>&yen;32.30</span>
				<a href="#">加入购物车</a>
			</span>
		</div>
		<ul class="right_booknav">
			<li>快捷直达</li>
			<li><a class="right_active" href="#book_one">编辑推荐</a></li>
			<li><a href="#book_two">内容推荐</a></li>
			<li><a href="#book_three">目 录</a></li>
		</ul>
		<div class="detail_first">
			<table class="table table-responsive">
				<tr class="one">
					<td>版次：</td>
					<td>页数：</td>
					<td>字数：</td>
				</tr>
				<tr>
					<td>印刷时间：</td>
					<td>开本：</td>
					<td>纸张：</td>
				</tr>
				<tr>
					<td>印次：</td>
					<td>包装：</td>
					<td>是否套装：</td>
				</tr>
				<tr>
					<td colspan="3">国际标准书号：</td>
				</tr>
			</table>
			<div id="book_one" class="book_nav">
				<div class="book_small_nav">编辑推荐</div>
				<p>JavaScript设计模式教你如何学会把经典和现代设计模式应用到JavaScript语言中，来编写优美、结构化和可维护的代码。
					如果想让代码保持高效、更易于管理，并且能够同步**的**实践，那么JavaScript设计模式正是为你打造的。</p>
			</div>
			<div id="book_two" class="book_nav">
				<div class="book_small_nav">内容推荐</div>
				<p>设计模式是解决软件设计中常见问题的可复用方案。学习任何编程语言，设计模式都是一个令人兴奋和极具吸引力的话题。</p>
				<p>《JavaScript设计模式》是JavaScript设计模式的学习指南。全书分为14章。首先介绍了什么是模式、模式的结构、类别、模式的分类、
					如何编写模式等等；然后，集中介绍了很多流行的设计模式在JavaScript中的应用，包括Module(模块)模式、Observer(观察者)模式、
					Facade(外观)模式和Mediator(中介者)模式；
					最后，还探讨了模块化的JavaScript模式、jQuery及其插件中的设计模式。</p>
				<p>《JavaScript设计模式》适合专业的Web开发人员和前端工程师阅读。通过阅读本书，他们将能够提高对设计模式的认识，
					并学会如何将设计模式应用到JavaScript编程语言中。</p>
			</div>
			<div id="book_three" class="book_nav">
				<div class="book_small_nav">目 录</div>
				<p>第1章　介绍</p>
				<p>第2章　什么是模式</p>
				<p>第3章　模式状态测试、Proto模式及三法则</p>
				<p>第4章　设计模式的结构</p>
				<p>第5章　编写设计模式</p>
				<p>第6章　反模式</p>
				<p>第7章　设计模式类别</p>
				<p>第8章　设计模式分类</p>
				<p>第9章　JavaScript设计模式</p>
			</div>
			<p  class="com_detail" id="goods_com">商品评论(34)</p>
			<div class="goods_comment change_h">
				<div class="left">
					<span></span>
					<p>好评率 98%</p>
				</div>
				<div class="right">
					<span>整体感觉不错(1234)</span>
					<span>印刷很正(234)</span>
					<span>纸质好(213)</span>
					<span>性价比很高(123)</span>
					<span>包装一般(21)</span>
					<span>折痕变形(12)</span>
				</div>
			</div>
			<div class="com_detail">
				<span>全部(164)</span>
				<span>好评(162)</span>
				<span>中评(2)</span>
				<span>差评(0)</span>
				<span>晒图(0)</span>
			</div>
			<div class="show_comment">
				<div class="comments_box">
					<div class="left_user">
						<img src="img/user.jpeg" />
						<p>用户</p>
					</div>
					<div class="right_user">
						<p>评论内容</p>
						<p>2016-12-22 19：42：18</p>
					</div>
				</div>
				<div class="comments_box">
					<div class="left_user">
						<img src="img/user.jpeg" />
						<p>用户</p>
					</div>
					<div class="right_user">
						<p>评论内容</p>
						<p>2016-12-22 19：42：18</p>
					</div>
				</div>
				
			</div>
			<p  class="com_detail">商品问答(0)</p>
			<div class="goods_answer">
				暂无信息！
			</div>
		</div>
		<?php include 'footer.php'?>
	</body>
</html>