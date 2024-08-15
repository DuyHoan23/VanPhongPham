<?php
include "header.php";
include "Left_side.php";
?>


<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="title-h3">Thêm khách hàng</h3>
                <div class="tile-body">

                    <div class="admin-content-right">
                        <form method="POST">
                            <div class="product-add-content git">
                                <div class="from-group col-md-3">
                                    <label class="control-label" for="">Tên khách hàng<span style="color: red;">*</span></label> <br>
                                    <input class="form-control" required type="text" name="tenKH"> <br>
                                </div>

                                <div class="from-group col-md-3">
                                    <label class="control-label" for="">Địa chỉ<span style="color: red;">*</span></label> <br>
                                    <input class="form-control" required type="text" name="diaChi"> <br>
                                </div>
                                <div class="from-group col-md-3">
                                    <label class="control-label" for="">Số điện thoại<span style="color: red;">*</span></label> <br>
                                    <input class="form-control" required type="text" name="sDT"> <br>
                                </div>

                                <div class="from-group col-md-3">
                                    <label class="control-label" for="">Email<span style="color: red;">*</span></label> <br>
                                    <input class="form-control" required type="text" name="email"> <br>
                                </div>
                            </div>
                            <div>
                                <button type="submit" id="btnGhi" name="btnGhi">Ghi dữ liệu</button>
                                <button class="button-container" type="" id="btnGhi" name="btnGhi"><a href="listKH">Quay lại</a></button>
                                <style>
                                    .button-container {
                                        margin: 0 0 0 20px;
                                        /* Chỉ định khoảng cách trên cùng 20px và bên trái 20px */
                                    }
                                </style>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>
<?php
?>


</body>

</html>