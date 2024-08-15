<?php
 DEFINE('DB_USER', 'root');
        DEFINE('DB_PASSWORD', '');
        DEFINE('DB_HOST', '127.0.0.1');
        DEFINE('DB_NAME', 'student_manager');
        $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die('Could not connect to MySQL');
        mysqli_select_db($mysqli, DB_NAME) OR die('Could not select the database');
        mysqli_query($mysqli, "SET NAMES 'utf8'");

        if (isset($_POST["name"], $_POST["age"], $_POST["nclass"])) {
    $n = trim($_POST["name"]);
    $a = trim($_POST["age"]);
    $c = trim($_POST["nclass"]);
    if (empty($n) || empty($a) || empty($c)) {
        echo ("Vui lòng nhập đầy đủ thông tin");
    } else {
        //$query = "INSERT INTO students (name, age, nclass) VALUES ('" . $_POST["name"] . "', '" . $_POST["age"] . "', '" . $_POST["nclass"] . "')";
        $query = "INSERT INTO students (name, age, nclass) VALUES ('" . $n . "', '" . $a . "', '" . $c . "')";
        $res = mysqli_query($mysqli, $query);
        if ($res) {
            echo ("Thêm sinh viên thành công");
        } else {
            echo ("Thêm sinh viên thất bại");
        }
    }
    goto end;
} else if (isset($_GET["id"])) {
            if ($_GET["id"] == "" ) {
                echo ("Vui lòng nhập id!");
                goto end;
            } else {
                $query = "SELECT * FROM students WHERE id='" . $_GET["id"] . "'";
                $resouter = mysqli_query($mysqli, $query);
            }
        } else {
            $query = "SELECT * FROM students";
            $resouter = mysqli_query($mysqli, $query);
        }
        
        $temparray = array();
        $total_records = mysqli_num_rows($resouter);
        
        if ($total_records >= 1) {
            while ($row = mysqli_fetch_assoc($resouter)) {
                $temparray[] = $row;
            }
        }
        echo json_encode($temparray);
        end:
?>