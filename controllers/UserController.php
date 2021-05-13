<?php
include_once 'models/User.php';

class UserController
{
    public function __construct()
    {
        //echo 'ham khoi tao cua UserController';
    }

    // danh sach
    public function index()
    {
        // goi Model User
        $m_user = new User();
        // Lấy dữ liệu hiển thị sang View
        $data = $m_user->danh_sach();

        // gọi View User
        include_once 'views/user/index.php';
    }

    // thêm
    public function add()
    {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $remember = $_POST['remember'];

            $m_user  = new User(); // Model User
            $m_user->add($name, $email, $pwd, $remember); // hàm thêm trong Model

            header('Location: http://mvc.local:8888/?method=danhsach&controller=user');
            exit;
        }

        include_once 'views/user/add.php';
    }

    // sưa
    public function edit()
    {

    }
}