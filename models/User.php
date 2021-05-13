<?php
include_once 'models/Connection.php';

class User extends Connection
{
    public function __construct()
    {
        parent::__construct(); // kết nối CSDL thành công
    }

    public function danh_sach()
    {
        $sql = 'SELECT * FROM users';
        $ketqua =  $this->con->query($sql);

        $arrData = array(); // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $ketqua->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

    // thêm dữ liệu
    public function add($name, $email, $pwd, $remember_token)
    {
        $sql = "INSERT INTO users (name, email, password,remember_token) VALUES ('$name', '$email', '$pwd','$remember_token')";

        $this->con->query($sql);
    }
}