		
		<?php
			//第二步内容----------------------------------------------------------
			if($_POST['step'] == 'step_two_ok'){
				echo '<form>
					<div class="input_box box_four">
						<span>昵称：</span>
						<b>Candice</b>
					</div>
					<div class="input_box box_four">
						<span>已验证手机：</span>
						<b>157*****246</b>
					</div>
					<div class="input_box box_four" >
						<span>请填写手机验证码:</span>
						<div class="input-group" id="input-group">
							<input class="form-control" type="text" name="tel" id="" value="" placeholder="输入手机号获取验证码"/>
							<span class="input-group-addon" id="shortmsg" style="cursor: pointer;">短信验证</span>
						</div>
					</div>
					<div class="input_box box_three">
						<input type="button" name="step" value="提交"/>
					</div>
				</form>';
			}
			//第三步内容----------------------------------------------------------
			if($_POST['step'] == 'step_three_ok'){
				echo '<form>
					<div class="input_box box_one">
						<span class="glyphicon glyphicon-cog"></span>
						<input type="text" name="enter_pwd" id="" value="" placeholder="设置您的新密码" />
					</div>
					<div class="input_box box_one">
						<span class="glyphicon glyphicon-lock"></span>
						<input type="text" name="ask_pwd" id="" value="" placeholder="再次确认密码" />
					</div>
					<div class="input_box box_three">
						<input  type="button" name="step" value="提交"/>
					</div>
				</form>';
			}
			//第四步内容----------------------------------------------------------
			if($_POST['step'] == 'step_four_ok'){
				echo '<div class="go_login">
					<span>新密码已成功设置！</span>
					<a href="login.php">&gt;&gt;马上去登录</a>
				</div>';
			}
		?>
			

