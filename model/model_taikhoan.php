<?php
    
            function check_user($ten, $matkhau) {
                $sql = "SELECT * FROM user WHERE ten_nguoidung ='$ten' AND mat_khau = '$matkhau'";
                $stmt = pdo_query_one($sql); 
                return $stmt;
            }

        

            // function update_taikhoan($id,$user,$email,$password){
            //     $sql="update user set ten_nguoidung='".$user."', mat_khau='".$password."',email='".$email."',dia_chi='".$address."' where id=".$id;
            //     pdo_execute($sql);
            
            // }

            function update_taikhoan($id,$user,$email,$password,$address,$anh){
                if($anh!=''){
                    $sql="update user set ten_nguoidung='".$user."', mat_khau='".$password."',email='".$email."',dia_chi='".$address."',anh='".$anh."' where id=".$id;
                }else{
                    $sql="update user set ten_nguoidung='".$user."', mat_khau='".$password."',email='".$email."',dia_chi='".$address."' where id=".$id;

                }
                pdo_execute($sql);
            
            }
            function insert_taikhoan($user,$email,$phone,$password){
                $sql="INSERT INTO user(ten_nguoidung,email,sdt,mat_khau) VALUES('$user','$email','$phone','$password')";
                pdo_execute($sql);
            }
            function loadall_taikhoan(){
                $sql="SELECT * FROM user order by id desc";
                $listtaikhoan=pdo_query($sql);
                return $listtaikhoan;
            }
            function delete_taikhoan($id){
                $sql="delete from user where id=".$id;
                pdo_execute($sql);
            }

            function check_email($email){
                $sql="select * from user where email='".$email."'";
                $sp = pdo_query_one($sql);
                return $sp;
            }
            function loadone_taikhoan($id){
                $sql="SELECT * FROM `user` WHERE id=".$id; 
                $one_taikhoan=pdo_query($sql);
                return $one_taikhoan;
            }
   
?>