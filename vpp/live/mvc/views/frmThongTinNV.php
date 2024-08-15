<?php
// include "header.php";
// include "Left_side.php";
?>
 <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="frmThongTinNV.php"><b>Thông tin nhân viên</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body" >
                    <div class="col-sm-2">
                    </div>
    <?php

        if(mysqli_num_rows($data["NV"])>0){
                
                echo "<p>THÔNG TIN NHÂN VIÊN</p>";
                echo"<table id='customers'>";
                    echo "<thead>";
                        echo "<tr>
                            <th>ID_NV</th>
                            <th>ID_TK</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Mật khẩu</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>CMND</th>
                            <th>Trạng thái</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>";
                    
                        while($row = mysqli_fetch_assoc($data["NV"])){
                            {                                
                            echo "<tr>";                                
                                echo "<td>" . $row["id_nhanvien"] . "</td>";
                                echo "<td>" . $row["id_taikhoan"] . "</td>";
                                echo "<td>" . $row["ten"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["pass"] . "</td>";
                                echo "<td>" . $row["sdt"] . "</td>";
                                echo "<td>" . $row["diachi"] . "</td>";
                                echo "<td>" . $row["CMND"] . "</td>";
                                echo "<td>" . $row["trangThai"] . "</td>";
                                echo "<td> <a href='editNV/".$row["id_taikhoan"]."'class='btn btn-edit' type='button' title='Sửa'> Sửa
                             </a>
                            <a href='deleteNV/".$row["id_taikhoan"]."'
                           onclick = \" javascript: return confirm('Bạn có chắc muốn xóa nhân viên này không') \" class='btn btn-delete' type='button' title='Xóa'>Xóa</a> </td>
                           ";
                            echo"</tr>";                     
                        }
                    }
                    echo "</tbody>";
                    echo "</table>"; 
                    
                    
        }
        else{
            echo "Khong co ban ghi";
        }   
?> 
</div>
    <button>
        <a href = 'addNV'> Thêm Nhân Viên </a>                
    </button>

    <button>
        <a href = 'XuatExcel.php'> Xuất Excel</a>                
    </button>
    </div>
    </div>
    </div>
    </div>
</body>
</html>

<style>
        /* Kiểu cơ bản cho toàn bộ trang */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            padding: 20px;
        }

        /* Kiểu cho main */
        main.app-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Kiểu cho tiêu đề */
        .app-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #eaeaea;
        }

        /* Kiểu cho đường dẫn breadcrumb */
        .app-breadcrumb {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .app-breadcrumb a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .app-breadcrumb a:hover {
            text-decoration: underline;
        }

        /* Kiểu cho bảng */
        #customers {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #customers th, #customers td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }

        #customers th {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Kiểu cho các nút hành động */
        .btn {
            padding: 8px 12px;
            margin-right: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Kiểu cho nút thêm nhân viên */
        button a {
            color: white;
            text-decoration: none;
        }

        button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>