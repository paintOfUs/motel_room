<?php
use Illuminate\Support\Facades\Auth;
?>

<div class="card mt-5">
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <a href="{{ route('create') }}">
                    <button type="button" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i>
                        Thêm
                    </button>
                </a>
            </div>
            <div class="col-10"></div>
        </div>
    </div>    
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
                    <th scope="col-4 text-center">Điều chỉnh</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php 
    use App\Models\post;

    $posts = post::all();
    ?>
    @foreach ($posts as $post)
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
                    <a href="{{ route('edit', ['id' => $post->id]) }}" class="btn btn-success">Sửa</a>
                </td>
                <td>
                    <a href="{{ route('remove', ['id' => $post->id]) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                </td>
            </tr>
@endforeach
            </tbody>
    </table>
</div>