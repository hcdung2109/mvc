<?php
include_once 'models/Connection.php';

class Vendor extends Connection
{
    public function __construct()
    {
        parent::__construct(); // kết nối CSDL thành công
    }


}