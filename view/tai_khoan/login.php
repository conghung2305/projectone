<style>
	.form-01{
		width: 35%;
		margin: 0 auto;
		

		}
		.login-form{
			padding: 20px;
			
		}
		input{
			width: 100%;
			padding: 0px 30px;
		}
</style>
			<div class="form-01">

				<!--Login Form Start-->
				<div class="col-md-6 col-12" style="margin:0 auto;">
					<h2>Đăng nhập</h2>
				</div>
				<!-- form -->
				<form class="login-form" action="index.php?act=dang_nhap" method="post">
					<div class="form-fild">
						<p><label>Tên người dùng <span class="required">*</span></label></p>
						<input name="ten" value="" type="text">
					</div>
					<div class="form-fild">
						<p><label>Mật khẩu <span class="required">*</span></label></p>
						<input name="matkhau" value="" type="password">
					</div>
					<div class="login-submit">
						<button type="submit" class="form-button" name="dangnhap">Đăng nhập</button>
						<!-- <?php
						if (isset($thongbao) && ($thongbao != "")) {
							echo "taì khoản không tồn tại ";
						}
						?> -->

						<label>
							<input class="checkbox" name="rememberme" value="" type="checkbox">

						</label>
					</div>
					<div class="lost-password">
						<a href="index.php?act=quenmk">Quên mât khẩu</a>
					</div>
				</form>

			</div>