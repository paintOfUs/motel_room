<div class="card">
    <div class="card-body">
        <form action="{{ route('update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
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
                <label>Vai trò</label><br>
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
                <input type="file" class="form-control" id="image" name="img">
            </div>
        
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        
    </div>
</div>