<?php
// function callAPI($apiName, $action, $id) {
    $baseURL = "http://localhost/VanPhongPham/$apiName/$action/$id";
    $ch = curl_init($baseURL);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }
    
    // curl_close($ch);
    
    // return $response;
// }

// // Sử dụng hàm để gọi API_NhanVien với hành động DELETE
// $id_nhanvien = $data['id_nhanvien'];
// $response = callAPI('API_NhanVien', 'DELETENV', $id_nhanvien);
// echo $response;

// // Sử dụng hàm để gọi một API khác, ví dụ API_SanPham với hành động GET
// $id_sanpham = $data['id_sanpham'];
// $response = callAPI('API_SanPham', 'GET', $id_sanpham);
// echo $response;

// $url = "http://localhost/VanPhngPham/API_NhanVien/DELETENV/".$data['id_nhanvien'];
// $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}else {
    $decoded = json_decode($resp);
    if ($decoded !== null) { // Kiểm tra xem $decoded có giá trị không
        foreach($decoded as $key => $val) {
            // Kiểm tra xem giá trị của thuộc tính có phải là chuỗi hay không
            if (is_string($val)) {
                echo $key . ': ' . $val . '<br>';
            } else {
                echo $key . ': '; // Nếu không phải chuỗi, chỉ in ra tên thuộc tính
                var_dump($val); // In ra giá trị của thuộc tính để kiểm tra kiểu dữ liệu
                echo '<br>';
            }
        }
    } else {
        echo  "<script type = 'text/javascript'>alert('Xóa nhân viên thành công');
        window.history.pushState(null, '', '/VanPhongPham/api/TestAPIGET');
        window.location.href = '/live/TestAPIGET';
        </script>";
              
    }
}


curl_close($ch);