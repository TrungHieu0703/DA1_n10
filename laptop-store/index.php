 //
 // session_start();
 // Đây là file chạy chính (Là nơi chúng require các file)
 // require_once "./common/env.php"; // Chứa các biến môi trường
 // require_once "./common/function.php"; // Chứa các hàm dùng chung

 // require các controller mà route trỏ tới
 // require_once "./controllers/HomeController.php";
 // require Các model mà controller muốn sử dụng
 // require_once "./models/Product.php";

 // Route (Điều hướng)
 // $act = $_GET['act'] ?? '/';

 // match ($act) {
 // Nơi khai báo các đường dẫn
 // '/' => (new HomeController())->index(),
 // 'danh-sach-san-pham'=> (new HomeController())->danhSachSanPham(),
 // Khai báo route
 // };