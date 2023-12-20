<?php
use Illuminate\Support\Facades\Auth;
?>

<div class="card">
    <div class="card-body">
        <h3 class="card-title" style="color: green;">Thông tin cá nhân</h3>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php
            if (Auth::check()){
                $user = Auth::user();
        ?>
            <form">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên: </label>
                    <input type="text" class="form-control" id="name" name="user_name" value="{{ $user->user_name }}">
                </div>
            
                <div class="mb-3">
                    <label for="gender" class="form-label">Giới tính</label>
                    <select class="form-select" id="gender" name="sex">
                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Nam</option>
                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                
                <div class="mb-3">
                    <label>Vai trò</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="role" name="role" value="1" {{ $user->role == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="role">Người dùng</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="role" name="role" value="0" {{ $user->role == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="role">Quản trị viên</label>
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                </div>
            
                <div class="mb-3">
                    <label for="image" class="form-label">Ảnh đại diện</label>
                    @if(str_contains($user->img,'https:'))
                        <img src="{{ $user->img }}" alt="Chưa tạo" style="width: 400px; height: auto;">
                    @else 
                        <img src="{{ asset('storage/images/'.$user->img) }}" style="height: 50px;width:100px;">
                    @endif 
                </div>
            
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        <?php
            }
        ?>
    </div>
</div>