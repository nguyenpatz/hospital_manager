<?php 

include '../connectDB.php';

session_start();



if(!empty($_SESSION['username'])) {
    // echo "<script>alert('Đã có username');</script>";
    $username = $_SESSION['username'];
} else {
    // echo "<script>alert('Không có username');</script>";
    header("location: ../login/login_form.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/patient.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- https://www.youtube.com/watch?v=O9l75KOB2pE 7:21-->
</head>
<body>
    <div class="container">
        <div class="btn">
            <span class="fas fa-bars"></span>
        </div>
        <nav class="sidebar">
            <div class="text"><?php echo $username;?></div>
            <ul>
                <li>
                    <a href="#">Trang chủ</a>
                </li>                
                <li>
                    <a href="#" class="ykien_btn">Ý kiến
                    <span class="fas fa-caret-down icon_arrow" ></span>
                    </a>
                    
                    <ul class="ykien_list">
                        <li><a href="#">Thêm mới</a></li>
                        <li><a href="#">Phiếu đánh giá</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Thông báo</a>
                </li>
                <li>
                    <a href="#">Lịch sử</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="../app/menu_patient.js"></script>
</body>
</html>