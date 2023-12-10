<div class="text-center">
    <h1>Website motel room</h1>
</div>
<div class="container-fluid mb-5">
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Div rộng 9 cột trên màn hình lớn -->
            <div class="col-lg-9 col-md-12">
                <div class="p-3">
                    <!-- Nội dung div rộng 9 cột -->
                    <h2 class="bg-primary text-white text-center">Tin đứng top</h2>
                    <hr class="text-danger my-4">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <?php 
                                for ($i=0; $i<12; $i++) { 
                                    
                                    ?>
                                    <div class="col mb-4">
                                            <div class="card mx-auto">
                                                <img src="https://bandon.vn/uploads/posts/thiet-ke-nha-tro-dep-2020-bandon-0.jpg"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h5 class="card-title">Tiêu đề phòng trọ</h5>
                                                            <p class="card-text">Địa điểm</p>
                                                        </div>
                                                        <div class=col-4>
                                                            <h4>Giá tiền</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-8">Diện tích</p>
                                                        <p class="col-4">Ngày đăng</p>
                                                    </div>
                                                    <p>Loại phòng</p>
                                                    <div class="d-flex justify-content-around">
                                                        <a href="#" class="btn btn-success text_center">Quan tâm</a>
                                                        <a href="{{ action([\App\Http\Controllers\DetailController::class, 'detail'])}}" class="btn btn-primary text_center">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <?php }?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Div rộng 3 cột trên màn hình lớn -->
            <div class="col-lg-3 col-md-12">
                <div class="p-3">
                    <!-- Nội dung div rộng 3 cột -->
                    <h2 class="bg-warning text-white text-center">tin nổi bật</h2>
                    <hr>
                    <?php 
                        for ($i=0; $i<12; $i++) { 
                                    
                    ?>
                    <div class="card mx-auto mb-2">
                        <div class="row row-cols-1 row-cols-lg-2 g-0">
                            <div class="col">
                                <img src="https://bandon.vn/uploads/posts/thiet-ke-nha-tro-dep-2020-bandon-0.jpg"
                                    class="img-fluid rounded-start" style="object-fit: cover; height: 100%;"
                                    alt="...">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Tiêu đề phòng trọ</h5>
                                    <h4>Giá tiền</h4>
                                    <a href="{{ action([\App\Http\Controllers\DetailController::class, 'detail'])}}" class="btn btn-primary text_center">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <nav class="justify-content-center" aria-label="...">
        <ul class="pagination pagination-sm">
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
      </nav>
</div>
