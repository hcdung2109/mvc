<h3>Thêm Người Dùng</h3>
<a href="/?method=danhsach&controller=user" class="btn btn-primary">Dach Sách</a>
<form action="" method="POST">
    <div class="form-group">
        <label for="name">Họ và Tên:</label>
        <input type="text" class="form-control" id="name" placeholder="Nhập Tên" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="remember" checked value="1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Thêm</button>
</form>