<h2>Danh Sách Người Dùng</h2>
<a href="/?method=them&controller=user" class="btn btn-primary">Thêm</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td>
                <a href="/?method=sua&controller=user&id=<?php echo $item['id'] ?>" class="btn btn-info">Sửa</a>
                <a href="/?method=xoa&controller=user&id=<?php echo $item['id'] ?>" class="btn btn-danger">Xóa</a>
                <button onclick="eventDelete(<?php echo $item['id'] ?>)" class="btn btn-warning">Xóa (ajax)</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>