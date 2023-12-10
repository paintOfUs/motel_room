<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    @include('header')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <img src="https://bandon.vn/uploads/posts/thiet-ke-nha-tro-dep-2020-bandon-0.jpg"
                    class="img-thumbnail mb-3 mt-3" alt="...">
                <H5>Giá: </H5>
                <h5>Diện tích</h5>
                <h5>Địa chỉ</h5>
                <h5>Điện thoại</h5>
                <p><b>Descristion</b></p>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="p-3">
                    <!-- Nội dung div rộng 3 cột -->
                    <h2 class="bg-warning text-white text-center">tin nổi bật</h2>
                    <hr>
                    <?php 
                    for ($i=0; $i<3; $i++) { 
                                
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
                                    <a href="{{ action([\App\Http\Controllers\DetailController::class, 'detail']) }}"
                                        class="btn btn-primary text_center">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
