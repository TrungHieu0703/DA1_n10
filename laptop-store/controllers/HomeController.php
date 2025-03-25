<?php

class HomeController
{
    public $modelProduct;

    public function __construct(){
        $this->modelProduct = new Product();
    }

    public function index()
    {
        echo "Đây là trang chủ";
    }
    public function danhSachSanPham(){
        $listProduct = $this->modelProduct->getAllProduct();
        //var_dump($listProduct);die();
        require_once './views/listProduct.php';
    }
    
}
