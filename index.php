<?php
//echo 'mo hình mvc';
include_once 'controllers/UserController.php';

if (isset($_GET['controller'])) { // user
    $controller = $_GET['controller'];

    if ($controller == 'user') {
        $c_user = new UserController();

        $method = $_GET['method'];
        if ($method == 'them') {

            $c_user->add(); // thêm

        } elseif ($method == 'danhsach') {
            $c_user->index(); // dach sách

        } elseif ($method == 'sua') {
            $c_user->edit();
        } elseif ($method == 'xoa') {
            $c_user->delete();
        } else {
            echo 'method không tồn tại';
        }

    } elseif ($controller == 'vendor') {
        //
    }

}




