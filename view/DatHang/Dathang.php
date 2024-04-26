<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<style>
    #dathang{
        margin-left: 20px;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center;">ĐẶT HÀNG<i class="fas fa-shopping-cart"></i></h1>
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Sản
                                        phẩm</h3>


                                    <!-- lấy dữ liệu -->
                                    <?php
                                    if (isset($_GET['MaSanPham']) && isset($_GET['TenSanPham']) && isset($_GET['GiaBan']) && isset($_GET['HinhAnh'])) {
                                        $MaSanPham = $_GET['MaSanPham'];
                                        $TenSanPham = $_GET['TenSanPham'];
                                        $GiaBan = $_GET['GiaBan'];
                                        $HinhAnh = $_GET['HinhAnh'];
                                    }

                                    ?>

                                    <!-- end lấy dữ liệu -->

                                    <div class="d-flex align-items-center mb-5">
                                        <?php
                                        $imageDirectory = "./view/Uploads/";
                                        ?>

                                        <div class="flex-shrink-0">
                                            <img src="<?php echo $imageDirectory . $HinhAnh; ?>" class="img-fluid" style="width: 100px;" alt="Generic placeholder image">
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="text-primary"><?php echo  $TenSanPham; ?></h5>

                                            <div class="d-flex align-items-center">
                                                <p class="fw-bold mb-0 me-5 pe-3">Mã<?php echo $MaSanPham; ?></p>
                                                <p class="fw-bold mb-0 me-5 pe-3 " style="color: green;"><?php echo $GiaBan; ?>đ</p>
                                                <?php $soluong = 1 ?>
                                                <div class="def-number-input number-input safari_only">SL:
                                                    <input id="soluong" class="quantity fw-bold text-black" min="0" name="soluong" value="1" type="text" style="width: 50px;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                                        <h5 class="fw-bold mb-0">Tổng:</h5>
                                        <h5 class="fw-bold mb-0" id="tongGiaBan"><?php echo $GiaBan; ?></h5>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">THÔNG TIN NGƯỜI NHẬN</h3>
                    </div>

                    <form class="mb-5" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" style="padding: 10px;">
                                    <label class="form-label fw-bold" for="tenSP">Họ tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tenSP" id="tenSP" placeholder="Tên sản phẩm" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group" style="padding: 10px;">
                                    <label class="form-label fw-bold" for="giaBan">Số điện thoại <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="giaBan" id="giaBan" placeholder="Giá bán" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group" style="padding: 10px;">
                                    <label class="form-label fw-bold" for="mota">Địa chỉ nhận hàng <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mota" id="mota" placeholder="Mô tả" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-outline mb-3" style="padding: 10px;">
                                    <label class="form-label fw-bold" for="typeName">Phương Thức Thanh Toán</label>
                                    <span class="text-danger">*</span>
                                    <input type="text" id="typeName" class="form-control form-control-lg" size="17" value="Thanh Toán Khi Nhận Hàng" name="phone" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-primary btn-block btn-lg mt-3" type="submit" value="Đặt hàng" name="dathang" id="dathang">

                            </div>


                    </form>

                </div>
            </div>
</body>


</html>

<!-- JavaScript -->

<script>
    var soluongInput = document.getElementById('soluong');
    soluongInput.addEventListener('input', function() {

        var soluong = parseInt(soluongInput.value);


        var giaban = <?php echo $GiaBan; ?>;


        var tongGiaBan = soluong * giaban;


        var tongGiaBanElement = document.getElementById('tongGiaBan');
        tongGiaBanElement.textContent = tongGiaBan + 'đ';
    });
</script>