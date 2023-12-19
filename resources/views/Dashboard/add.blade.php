<div class="card">
    <div class="card-body">
        <form action="{{ route('add') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="mb-4">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="user_name">
            </div>
        
            <div class="mb-4">
                <label for="gender" class="form-label">Giới tính</label>
                <select class="form-select" id="gender" name="sex">
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                </select>
            </div>
        
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"">
            </div>

            <div class="mb-4">
                <label class="form-label" for="floatingPassword">mật khẩu</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password'>
                {{-- @if ($errors -> has('password'))
                    <span class="error-message">*{{ 
                    $errors->first('password') }}</span>
                @endif --}}
              </div>
              <div class="mb-4">
                <label class="form-label" for="floatingPassword">nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='password_confirmation'>
                {{-- @if ($errors -> has('password_confirmation'))
                    <span class="error-message">*{{ 
                    $errors->first('password_confirmation') }}</span>
                @endif --}}
              </div>
        
            <div class="mb-4">
                <label>Vai trò</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="role" name="role" value="1">
                    <label class="form-check-label" for="role">Người dùng</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="role" name="role" value="0">
                    <label class="form-check-label" for="role">Quản trị viên</label>
                </div>
            </div>
        
            <div class="mb-4">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        
            <div class="mb-4">
                <label for="image" class="form-label">Ảnh đại diện</label>
                <input type="file" class="form-control" id="image" name="img">
            </div>
        
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
        
    </div>
</div>