<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?act=tc">
      <img src="./view/TrangChu/sliders/LOGO_NEW.png" alt="Bootstrap" height="45">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?act=tc">TRANG CHỦ</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="index.php?act=gttt">THÔNG TIN</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?act=gtyt">GIỎ HÀNG</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?act=dhct">ĐƠN HÀNG CỦA TÔI</a>
        </li>
        <li class="nav-item">
          <?php
          // Kiểm tra session và thời gian đăng nhập
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && (time() - $_SESSION['logged_in_time'] < 300)) {
            // Chuyển hướng đến trang admin nếu session vẫn còn hiệu lực
            echo '<a class="nav-link" href="./admin/index.php?act=qlsp">ĐĂNG NHẬP</a>';
          } else {
            echo '<a class="nav-link" href="index.php?act=dangnhap">ĐĂNG NHẬP</a>';
          }
          ?>
        </li>

      </ul>
      <form class="d-flex" action="index.php?act=search" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" name="nameSearch">
        <input class="btn bsb-btn-ml btn-success" type="submit" id="search" name="search" value="Tìm kiếm">
      </form>
    </div>
  </div>
</nav>