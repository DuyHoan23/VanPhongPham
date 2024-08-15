<?php
class NhanVienModel extends DB{
    public function listNhanVien(){
        $sql = "SELECT * FROM tblnhanvien";
         return $result = mysqli_query($this->con,$sql);
    }

    public function themNhanVien(){
            if($_SERVER['REQUEST_METHOD']== "POST" and isset($_POST['btnsubmit'])){              
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $trangThai = $_POST['trangthai'];
                if(empty($ten) || empty($email) || empty($pass)|| empty($sdt)|| empty($diachi) || empty($trangThai)){
                    echo "<script type = 'text/javascript'>alert('Vui lòng nhập đầy đủ thông tin');
                    </script>";
                    return;
                }
                
                $sql2 = "SELECT * FROM tbltk WHERE email ='".$email."'";
                $result2 = mysqli_query($this->con,$sql2);
                if(mysqli_num_rows($result2)<=0){
                $sql = "INSERT INTO tbltk (ten,email,pass,sdt, diachi, quyen) VALUES('".$ten."','".$email."','".$pass."','".$sdt."','".$diachi."','Nhânviên')";
                $result = mysqli_query($this->con,$sql);
                if(!$result){
                    echo "Không thêm thành công";
                }
                else{
                    $sql4 = "SELECT id_taikhoan FROM tbltk WHERE email = '".$email."' ";
                    $result4 = mysqli_query($this->con,$sql4);
    
                    $row = mysqli_fetch_assoc($result4);
                    $sql3 = "INSERT INTO tblnhanvien (id_nhanvien,id_taikhoan,ten,email,pass,sdt,diachi)VALUES('','".$row['id_taikhoan']."','".$ten."','".$email."','".$pass."','".$sdt."','".$diachi."')";
                    $result3 = mysqli_query($this->con,$sql3);
                    echo  "<script type = 'text/javascript'>alert('Thêm nhân viên thành công');
                    </script>";
                }
                }else{
                    echo"Trùng email";
                }
                
            }
    }

    public function showEdit($id_taikhoan){
        $sql = "SELECT * FROM tblnhanvien WHERE id_taikhoan = '" .$id_taikhoan. "'";
        return $result = mysqli_query($this->con,$sql);
    }

    public function editNV($id_taikhoan){       
            if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST["btnsubmit"])){
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $CMND = $_POST['cmnd'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $trangThai = $_POST['trangthai'];
                $sql = "UPDATE tblnhanvien SET
                 ten = '" .$ten."' ,
                 email = '" .$email."',
                 CMND = '" .$CMND."',
                 sdt = '" .$sdt."',
                 diachi = '" .$diachi."',
                 trangThai = '".$trangThai."'
                 WHERE id_taikhoan = '" .$id_taikhoan."'";
                $result = mysqli_query($this->con,$sql);
                if(!$result){
                    echo "Update error" . mysqli_error($this->con);
                }
                else{
                    echo " 
                    <script> 
                    alert('Sửa nhân viên thành công');
                    </script>";
                }
            }            
    }

    public function deleteNV($id_taikhoan){
            $sql = "DELETE FROM tblnhanvien WHERE id_taikhoan ='" .$id_taikhoan."'";
            $result = mysqli_query($this->con,$sql);
            if(!$result){
                echo "Delete error" .mysqli_error($this->con);
            }
            else{
                echo "<script type = 'text/javascript'>alert('Xóa nhân viên thành công');
                </script>";
            }

    }


}
?>