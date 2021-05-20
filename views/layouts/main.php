<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1 style="text-align: center;">Trang Quản Trị</h1>
    <!-- Content -->
    <?php

    if ($controller == 'user' && $view == 'edit') {
        include_once 'views/user/edit.php';
    } elseif ($controller == 'user' && $view == 'add') {
        include_once 'views/user/add.php';
    } elseif ($controller == 'user' && $view == 'index') {
        include_once 'views/user/index.php';
    }

    ?>
    <!-- End Content -->
</div>

<script type="text/javascript">
    // hàm xóa
    function eventDelete(id) {
        // tạo ra request chạy ngầm sử dụng ajax
        $.ajax({
            method: "GET",
            url: "/?method=xoa&controller=user&id="+id,
            data: {

            },
            success: function(response) {
                alert("xóa thành công");
                // tải lại trang
                location.reload();
            }
        });

    }

</script>



</body>
</html>
