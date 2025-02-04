
<?php
include './mvc/controllers/APIHandler_POST.php'; // Bao gồm tệp định nghĩa lớp APIHandler

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btnsubmit'])) {
    $id_taikhoan = $_POST['id_taikhoan'];
    $ten = $_POST['ten'];
    $email = $_POST['email'] ?? null;
    $pass = $_POST['pass'] ?? null;
    $sdt = $_POST['sdt'] ?? null;
    $diachi = $_POST['diachi'] ?? null;
    $quyen = $_POST['quyen'] ?? null;
    
    $data_array = array(
        'id_taikhoan' => $id_taikhoan,
        'ten' => $ten,
        'email' => $email,
        'pass' => $pass,
        'sdt' => $sdt,
        'diachi' => $diachi,
        'quyen' => $quyen 
    );

    $url = "http://localhost/live/Apitaikhoan/POSTTK";

    $response = APIHandler::callAPI($url, $data_array, 'POST');
    APIHandler::handleResponse($response);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel = "stylesheet" href = "public/css/style.css"/>
   
 
</head>
<body>
    <div>
<div class = "container">
        <form METHOD = "post">
            <h1>Đăng kí Tầi Khoản</h1>

            <div class="form-control ">
                <input id ="ten"  name = "ten" type="text" placeholder ="Tên" >
                <span></span>
                <small></small>
            </div>


            <div class="form-control ">
                <input id ="email" name = "email" type="email" placeholder ="Email" >
                <span></span>
                <small></small>
            </div>

            <div class="form-control ">
                <input id ="sdt" name = "sdt" type="int" placeholder ="Số điện thoại" >
                <span></span>
                <small></small>
            </div>
            <div class="form-control ">
                <input id="password" name = "password" type="password" placeholder ="Password" >
                <span></span>
                <small></small>
            </div>
            
            <div class="form-control ">
                <input id="confirm-password" name = "confirm-password" type="password" placeholder ="Cofirm-Password" >
                <span></span>
                <small></small>
            </div>

            <div class="form-control ">
                <input id ="diachi" name = "diachi" type="text" placeholder ="Địa chỉ" >
                <span></span>
                <small></small>
            </div>
            <div class="form-control">
    <select id="quyen" name="quyen">
        <option value="admin">Admin</option>
        <option value="nhanvien">Nhân viên</option>
    </select>
    <span></span>
    <small></small>
</div>
        
            
            <button class="btn-submit" name = "btnsubmit">Create</button>
          
            <div class="signup-link">
                 <a href="qltk.php">Trở về</a>
            </div>
        </form>
    </div>
    <div>
    
</div>
</div>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

:root{
    --success-color: #2691d9;
    --error-color:#e74c3c;   
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Roboto', sans-serif;
    height: 100vh;
    background: linear-gradient(120deg, #3ca7ee, #9b408f);
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container{
    width: 400px;
    border: none;
    border-radius:10px ;
    background: white;
    padding: 25px; 
}
.container h1{
    text-align: center;
}
.form-control{
    width: 100%;
    position: relative;
    margin-top: 25px;
}
.form-control input{
    width: 100%;
    height: 40px;
    font-size: 16px;
    border: none;
    outline: none;
    border-bottom: 2px solid #adadad;
}
.form-control span{
    position: absolute;
    border-bottom: 3px solid var(--success-color);
    left: 0;
    top: 38px;
    width: 0%;
    transition: 0.3s;
}
.form-control input:focus ~ span{
    width: 100%;
}
.form-control.error small{
    color: var(--error-color);
}
.form-control.error input{
    border-bottom: 2px solid var(--error-color);
}
.btn-submit{
    width: 100%;
    height: 50px;
    border-radius: 25px;
    border: none;
    background: var(--success-color);
    color: white;
    font-size: 18px;
    font-weight: bold;
    margin: 25px 0;
    cursor: pointer;
    transition: 0.3s;
}
.btn-submit:hover{
    background: #08609a;
}
.signup-link{
    text-align: center;
}
.signup-link a {
    color: var(--success-color);
    text-decoration: none;
    cursor: pointer;
}
.signup-link a:hover{
    text-decoration: underline;
}
</style>