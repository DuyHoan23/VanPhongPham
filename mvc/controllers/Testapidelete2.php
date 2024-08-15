<?php

function callAPI($apiName, $action, $id) {
    $baseURL = "http://localhost/VanPhongPham/$apiName/$action/$id";
    $ch = curl_init($baseURL);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // Sử dụng phương thức DELETE
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        curl_close($ch);
        return null;
    }

    curl_close($ch);
    return $response;
}

// Sử dụng hàm để gọi API_NhanVien với hành động DELETE
$id_nhanvien = $data['id_nhanvien'];
$response = callAPI('API_NhanVien', 'DELETENV', $id_nhanvien);

if ($response) {
    $decoded = json_decode($response);

    if ($decoded !== null) { // Kiểm tra xem $decoded có giá trị không
        foreach ($decoded as $key => $val) {
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
        echo "<script type='text/javascript'>
                alert('Xóa nhân viên thành công');
                window.history.pushState(null, '', '/VanPhongPham/TestAPIGET');
                window.location.href = '/VanPhongPham/TestAPIGET';
              </script>";
    }
} else {
    echo "Có lỗi xảy ra khi gửi yêu cầu tới API.";
}
?>
