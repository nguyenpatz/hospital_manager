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
    <!-- https://www.youtube.com/watch?v=O9l75KOB2pE 7:21-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="container__header">
            <nav class="sidebar">

                <div class="text">
                    <span><img src="../images/user.svg" alt=""></span>
                    <?php echo $username;?>
                </div>

                <ul class="sidebar__menu">
                    <li>
                        <a href="#">Trang chủ</a>
                    </li>                
                    <li>
                        <a href="#" class="ykien">Ý kiến
                        <span class="fas fa-caret-down icon_arrow" ></span>
                        </a>

                        <ul class="sidebar__menu-more">
                            <li><a href="../patient/new_status.php" target="iframe_a">Thêm mới</a></li>
                            <li><a href="../patient/new_feedback.php" target="iframe_a">Phiếu đánh giá</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Thông báo</a>
                    </li>
                    <li>
                        <a href="#">Lịch sử</a>
                    </li>
                </ul>

                <div class="logout__container">
                    <a href="../login/logout_form.php" class="fa-solid fa-arrow-right-from-bracket icon__logout"></a>
                    <a class="fa-solid fa-x close__btn"></a>
                </div>
                
            </nav>

            

            <button class="btn__sidebar">
                <i class="fa-solid fa-bars icon__menu"></i>
            </button>

        </div>

        <div class="main">
            <iframe class="main__display" name="iframe_a" src="" frameborder="0"></iframe>
        </div>
        
    </div>
    <script src="../app/menu_patient.js"></script>
    
</body>
</html>