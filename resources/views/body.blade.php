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
                    <div class="container" >
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <?php 
                                foreach ($posts as $post) {
                                    # code...
                                    ?>
                                    <div class="col mb-4">
                                            <div class="card mx-auto" style="height: 604px;font-size: 12px;">
                                                <img src="{{ $post->img }}"
                                                    class="card-img-top" alt="..." style="width: auto; height: 300px; object-fit: cover; object-position: center;">
                                                <div class="card-body">
                                                    <div class="row">
                                                            <h5 class="card-title">{{ $post->title }}</h5>
                                                            <p class="card-text">{{ $post->street }},{{ $post->district }},{{ $post->city }}</p>
                                                    </div>

                                                        <h4>{{ $post->cost }}</h4>


                                                        <p>Diện tích: {{ $post->area }}</p>


                                                        <p>Ngày đăng: {{ $post->created_at }}</p>

                                                    <p>Loại phòng: {{ $post->categories }}</p>
                                                    <div class="d-flex justify-content-around">
                                                        <a href="#" class="btn btn-success text_center">Quan tâm</a>
                                                        <a href="{{ action([\App\Http\Controllers\DetailController::class, 'detail'])}}" class="btn btn-primary text_center">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <?php }?>
                                
                        </div>
                        {{ $posts->links() }}
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
                        foreach ($latestPosts as $post) { 
                                    
                    ?>
                    <div class="card mx-auto mb-2" style="height: 200px;font-size:8px;">
                        <div class="row row-cols-1 row-cols-lg-2 g-0">
                            <div class="col">
                                <img src="{{ $post->img }}"
                                    class="img-fluid rounded-start" style="object-fit: cover; height: 200px;width:250px;"
                                    alt="...">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:16px;">{{ $post->title }}</h5>
                                    <h4>{{ $post->cost }}</h4>
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
    
</div>
