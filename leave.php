<?php
	if($_POST['leave'] != ''){
		echo '<div class="comments_box">
					<div class="left_user">
						<img src="img/user.jpeg" />
						<p>用户</p>
					</div>
					<div class="right_user">
						<div>
							<span class="txt">'.$_POST['leave'].'</span> 
							<ul class="glyphicon glyphicon-chevron-down" id="leave_down">
								<li>删除</li>
								<li>拉入黑名单</li>
							</ul>
						</div>
						<p>2016-12-22 19：42：18<span>回复</span></p>
					</div>
				</div>';
		
	}
?>