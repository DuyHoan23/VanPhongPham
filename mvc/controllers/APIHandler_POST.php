<?php

class APIHandler {
    public static function callAPI($url, $data = null, $method = 'POST') {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method); // Sử dụng phương thức HTTP được cung cấp

        if ($method == 'POST' || $method == 'PUT') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
            curl_close($ch);
            return null;
        }

        curl_close($ch);
        return $response;
    }

    public static function handleResponse($response) {
        if ($response) {
            $decoded = json_decode($response);

            if ($decoded !== null) {
                foreach ($decoded as $key => $val) {
                    if (is_string($val)) {
                        echo $key . ': ' . $val . '<br>';
                    } else {
                        echo $key . ': ';
                        var_dump($val);
                        echo '<br>';
                    }
                }
            } else {
                echo "<script type='text/javascript'>
                        alert('Yêu cầu thành công');
                        window.history.pushState(null, '', '/live/TestAPIGET');
                        window.location.href = '/live/TestAPIGET';
                      </script>";
            }
        } else {
            echo "Có lỗi xảy ra khi gửi yêu cầu tới API.";
        }
    }
}
?>
