<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['submit']))
{
        //Kết nối tới database
        include('ketnoisql.php');
        
        //Lấy dữ liệu nhập vào
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        
        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$email || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, "SELECT * FROM login WHERE email='$email'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row["password"]) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['email'] = $email;
    // echo "Xin chào " . $email . ". Bạn đã đăng nhập thành công. <a href='giohang.php'>Về trang chủ</a>";
    header("Location: trangchu.php");
    die();
    
}
?>
