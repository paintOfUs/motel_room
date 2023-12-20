<?php
use Illuminate\Support\Facades\Auth;
?>

<div class="card">
    <div class="card-body">
        <h3 class="card-title" style="color: green;">Nhà cho thuê bạn đã đăng</h3>
    </div>
</div>

<div class="card-body">
    <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">STT</th> -->
                    <th scope="col">Loại nhà</th>
                    <th scope="col">Vị trí</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thời gian khởi tạo</th>
                    <th scope="col">Thời gian cập nhật</th>
                    <th scope="col-4 text-center">Chi tiết</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php 
    use App\Models\post;

    $posts = post::all();
    ?>
    @foreach ($posts as $post)

    <?php
        if (Auth::check()){
            $user = Auth::user();
    ?>
        <?php
            if ($post->user_id == $user->id){

        ?>
            <tr>
                <!-- <th scope="row">{{ $post->id }}</th> -->
                <td>{{ $post->categories }}</td>
                <td>{{ $post->street }}, {{ $post->district }}, {{ $post->city }} </td>
                <td>{{ $post->cost }}</td>
                <td>{{ $post->phone }}</td>
                <th scope="row" style="max-width: 100px; max-height: 100px;">
                    @if(str_contains($post->img,'http:'))
                        <img src="{{ $post->img }}" alt="Chưa tạo" style="width: 100%; height: auto;">
                    @else 
                        <img src="{{ asset('storage/images/'.$post->img) }}" style="height: 50px;width:100px;">
                    @endif 
                </th>
                
                <td>{{ $post->created_at ?? 'Chưa tạo' }}</td>
                <td>{{ $post->updated_at ?? 'Chưa tạo' }}</td>
                <td>
                    <a href="{{ route('detail',['id' => $post->id])}}" class="btn btn-primary text_center">Xem ngay</a>
                </td>
            </tr>
        <?php 
        }elseif ($post->role == 0)
         ?>
    <?php } ?>
@endforeach
            </tbody>
    </table>
</div>