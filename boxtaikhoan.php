




<li><a href="my-account.html">My account</a>
<?php
     if(isset($_SESSION['user'])){
        // echo'<pre>';
        // print_r($user);
    extract($_SESSION['user']);
     ?>
       <ul>
       <li><a href="index.php?act=suatk">Tài khoản</a></li>
        <li><a href="index.php?act=list_bill&id='.$id_nguoidung'">Đơn hàng của bạn</a></li>
       <li><a href="index.php?act=list_lh">liên hệ của bạn</a></li>
       <li><a href="index.php?act=thoat">Thoát</a><li>
        <?php
    }else{?>
    <ul>
         <li><a href="index.php?act=login">Đăng nhập</a></li>
         <li><a href="index.php?act=register">Đăng ký </a></li>
 
        <?php
    }
                                            
    ?>
      
                 
    
</ul>
</li>                                  
                                            