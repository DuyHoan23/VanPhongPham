<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

echo "Starting cURL request<br>";

// $ch = curl_init();

// $url = "http://localhost/live/API_NhanVien/nhanvien";
$baseURL = "http://localhost/VanPhongPham/$apiName/$action/$id";
    $ch = curl_init($baseURL);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }
    

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo "cURL Error: " . $e;
} else {
    // Kiểm tra phản hồi từ API
    // echo "API Response: " . htmlspecialchars($resp) . "<br>";
    // var_dump($resp);

    // Giải mã JSON
    $decoded = json_decode($resp, true);

    // Kiểm tra lỗi trong quá trình giải mã JSON
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "JSON Decode Error: " . json_last_error_msg();
    } else {
        // Lưu dữ liệu vào session và chuyển hướng nếu không có lỗi
        $_SESSION['nhanvien_data'] = $decoded;
        echo "Data saved to session, redirecting...<br>";
        // echo  "<script type = 'text/javascript'>
        //         window.history.pushState(null, '', '/live/NhanVien/SayHi');
        //         window.location.href = '/VanPhongPham/SayHi';
        //         </script>";
        exit();
    }
}

curl_close($ch);
echo "cURL session closed<br>";
?>
