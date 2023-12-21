<?php
use Illuminate\Support\Facades\Auth;
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quan tâm</a>
          </li>
        </ul>
        <div class="mx-2">
          <button class="btn btn-outline-success">
            <a href="{{ action([\App\Http\Controllers\LoginController::class, 'login']) }}" class=" nav-link me-3 ms-3">đăng nhập</a>
          </button>
          <button class="btn btn-outline-danger">
            <a href="{{ action([\App\Http\Controllers\RegisterController::class, 'register']) }}" class=" nav-link me-3 ms-3">đăng ký</a>
          </button>
        </div>
      </div>
    </div>
</nav>
<div class="container">
    <h3>Tìm kiếm nhanh</h3>
    <form class="row g-3 mt-1" action="{{ route('search') }}" method="POST">
        @csrf
        <?php
        use App\Models\post;
        $posts_categories = post::distinct()->pluck('categories');
        $posts_city = post::distinct()->pluck('city');
        $posts_district = post::distinct()->pluck('district');
        $posts_area = post::distinct()->pluck('area');
        $posts_cost = post::distinct()->pluck('cost');
        ?>
        <!-- Select 1 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput" name="categories">
                <option selected>Danh mục</option>
                @foreach ($posts_categories as $item)               
                <option value="{{ $item }}">{{ $item }} </option>
                @endforeach
            </select>
        </div>

        <!-- Select 2 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput" name="city">
                <option selected>Tỉnh/Thành Phố</option>
                @foreach ($posts_city as $item)               
                <option value="{{ $item }}">{{ $item }} </option>
                @endforeach
            </select>
        </div>

        <!-- Select 3 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput" name="district">
                <option selected>Quận/Huyện</option>
                @foreach ($posts_district as $item)               
                <option value="{{ $item }}">{{ $item }} </option>
                @endforeach
            </select>
        </div>

        <!-- Select 4 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput" name="area">
                <option selected>Diện tích</option>
                @foreach ($posts_area as $item)               
                <option value="{{ $item }}">{{ $item }} </option>
                @endforeach
            </select>
        </div>

        <!-- Select 5 -->
        <div class="col-auto mx-auto">
            <label for="dropdownInput" class="visually-hidden">Danh mục</label>
            <select class="form-select dropdownInput" name="cost">
                <option selected>Mức giá</option>
                @foreach ($posts_cost as $item)               
                <option value="{{ $item }}">{{ $item }} </option>
                @endforeach
            </select>
        </div>

        <!-- Input Search -->
        <div class="col-auto mx-auto">
            <label for="inputSearch" class="visually-hidden">Tìm theo tên</label>
            <input type="text" class="form-control" id="inputSearch" placeholder="Search" name="search">
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
