<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Quan tâm</a>
          </li>
        </ul>
        <div class="mx-2">
          <button class="btn btn-outline-success">
            <a href="login.php" class=" nav-link me-3 ms-3">đăng nhập</a>
          </button>
          <button class="btn btn-outline-danger">
            <a href="register.php" class=" nav-link me-3 ms-3">đăng ký</a>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <h3>Tìm kiếm nhanh</h3>
    <form class="row g-3 mt-1">
        <!-- Select 1 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput">
                <option selected>Danh mục</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
            </select>
        </div>

        <!-- Select 2 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput">
                <option selected>Tỉnh/Thành Phố</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
            </select>
        </div>

        <!-- Select 3 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput">
                <option selected>Quận/Huyện</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
            </select>
        </div>

        <!-- Select 4 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput">
                <option selected>Diện tích</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
            </select>
        </div>

        <!-- Select 5 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput">
                <option selected>Mức giá</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
            </select>
        </div>

        <!-- Input Search -->
        <div class="col-auto mx-auto">
            <label for="inputSearch" class="visually-hidden">Tìm theo tên</label>
            <input type="text" class="form-control" id="inputSearch" placeholder="Search">
        </div>

        <!-- Button -->
        <div class="col-auto mx-auto">
            <button type="submit" class="btn btn-primary">Tìm ngay</button>
        </div>
    </form>
</div>
<script>
  // Initialize Select2
  $(document).ready(function() {
      $('.dropdownInput').select2({
          tags: true,
          tokenSeparators: [',', ' '],
      });
  });
</script>