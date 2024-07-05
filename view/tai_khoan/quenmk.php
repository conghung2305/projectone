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
		         
		                
		                    <div class="form-login-title">
		                        <h2>Lấy lại mật khẩu</h2>
		                    </div>
		                   
		                        <form  class="login-form" action="index.php?act=quenmk" method="post">
		                            <div class="form-fild">
		                                <p><label>Email người dùng <span class="required">*</span></label></p>
		                                <input name="email" value="" type="text">
		                            </div>
		                           
		                            <div class="login-submit">
		                                <button type="submit" class="form-button" name="check">Kiểm tra email</button>
		                                <label>
		                                    <input class="checkbox" name="rememberme" value="" type="checkbox">
                                                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")){
                                                    echo $thongbao;
                                                }
                                                ?>
		                                </label>
										
		                            </div>
									
		                            <!-- <div class="lost-password">
		                                <a href="index.php?act=quenmk"><input type="submit"value="Lost your password?"></a>
		                            </div> -->
		                        </form>
		</div>
			<?php
			include "view/tai_khoan/login.php";
			?>