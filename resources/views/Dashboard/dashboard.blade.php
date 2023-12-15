<div class="card">
    <div class="card-body">
        <h5 class="card-title">Welcome to Your Dashboard</h5>
        <p class="card-text">This is the main content area of your dashboard.</p>
    </div>
</div>
<div class="card mt-5">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Email</th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">vai trò</th>
                    <th scope="col">Thời gian khởi tạo</th>
                    <th scope="col">thời gian cập nhật</th>
                    <th scope="col-4 text-center">Điều chỉnh</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php 
    use App\Models\User;
    $users = User::all();
    ?>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{ $user->id }}</th>
        <th scope="row" style="max-width: 100px; max-height: 100px;">
            @if(str_contains($user->img,'https:'))
                <img src="{{ $user->img }}" alt="Chưa tạo" style="width: 100%; height: auto;">
            @else 
                <img src="{{ asset('storage/images/'.$user->img) }}" style="height: 50px;width:100px;">
            @endif 
        </th>
        <td>{{ $user->user_name }}</td>
        <td>{{ $user->sex ?? 'Chưa có' }}</td>
        <td>{{ $user->email ?? 'Chưa có' }}</td>
        <td>{{ $user->phone ?? 'Chưa tạo' }}</td>
        <td>
            @if ($user->role == 1)
                Người dùng
            @elseif ($user->role == 0)
                Quản trị viên
            @else
                Không xác định
            @endif
        </td>
        <td>{{ $user->created_at ?? 'Chưa tạo' }}</td>
        <td>{{ $user->updated_at ?? 'Chưa tạo' }}</td>
        <td>
            <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-success">Sửa</a>
        </td>
        <td>
            <a href="{{ route('remove', ['id' => $user->id]) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
        </td>
    </tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>

