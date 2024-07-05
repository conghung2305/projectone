<style>
	input{
		width: 100%;
	}

	.primary{
		background-color: orange;
	}

</style>
<div class="col-md-6 col-12" style="margin:0 auto;">
		                <div class="customer-login-register register-pt-0">
		                    <div class="form-register-title">
		                        <h2 style="text-align:center; margin-top:20px;">Tài khoản </h2>
		                    </div>
		                    <div class="register-form config-2">
                            <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                    ?>
		                        <form action="index.php?act=suatk" method="post" enctype="multipart/form-data">
                                 
		                            <div class="form-fild">
		                                <p><label>Tên người dùng <span class="required">*</span></label></p>
		                                <input name="ten_nguoidung" value="<?=$ten_nguoidung?>" type="text">
		                            </div>
									<div class="form-fild">
		                                <p><label>Enail <span class="required">*</span></label></p>
		                                <input name="email_nguoidung" value="<?=$email?>" type="text">
		                            </div>
		                            <div class="form-fild"> 
		                                <p><label>Mật khẩu <span class="required">*</span></label></p>
		                                <input name="mat_khau" value="<?=$mat_khau?>" type="text">
		                            </div>
									<div class="form-fild">
		                                <p><label>Địa chỉ <span class="required">*</span></label></p>
		                                <input name="dia_chi" value="<?=$dia_chi?>" type="text">
		                            </div>
									<div class="form-fild">
		                                <p><label>Hình ảnh cá nhân <span class="required"></span></label></p>
		                                <input name="anh" type="file" value="<?=$anh?>" >
										
										<img src="admin/admin/upload/<?=$anh?>" height="80px" >
		                            </div>
		                            <div class="register-submit">
                                    <input type="hidden" name="id" value="<?=$id?>">
								<a class="btn btn-primary primary" href="index.php?act=home">Quay lại trang chủ</a>
		                                <input style="display:inline-block; width: auto;" class="btn btn-primary primary" type="submit" class="form-button" name="capnhat" value="Cập nhâp">

		                            </div>
		                        </form>
		                    </div>
		                </div>
                     
		            </div>
                  