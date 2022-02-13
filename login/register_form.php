<?php

include '../connectDB.php';

session_start();

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    // kiểm tra tài khoản đó đã có chưa
    $check_account = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    $stmt = $pdo->prepare($check_account);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // nếu có thì thôi
    if(!empty($result)) {
        $msg = "Tài khoản đã tồn tại";

        echo '<script language="javascript">';
        echo 'alert("Tài khoản đã tồn tại")';
        echo '</script>';

    } else {
        if($password != $cpassword) {
            echo '<script language="javascript">';
            echo 'alert("Mật khẩu không trùng khớp!")';
         echo '</script>';
        } else {
            $insert = "INSERT INTO account(username, password, name, address, phone_number)
            VALUES (:username, :password, :name, :address, :phone_number)";

            $data = [
                "username" => $username,
                "password" => $password,
                "name" => $_POST["name"],
                "address" => $_POST["addres"],
                "phone_number" => $_POST["phone_number"],
            ];

            $stmt = $pdo->prepare($insert);

            $stmt->execute($data);
        }
    }
    

    

    // nếu chưa thì lập tài khoản mới
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
<div class="container">
        <div class="darkmode__position">
            <div class="darkmode__btn">
                <img src="../images/moon_dark.svg" class="darkmode__icon" alt="">
            </div>    
        </div>
       <div class="login__container">
           <form action="" method="post" class="login__form">
               <h1 class="login__title">Đăng ký</h1>
               <?php 
               
                    // if(isset($error)) {
                    //     echo "<span>".$error."</span>";
                    // } else if(isset($msg)) {
                    //     echo "<span>".$msg."</span>";
                    // }
               ?>
               <input type="text" name="username" required placeholder="Tài khoản" class="input_field username">
               <input type="password" name="password" required placeholder="Mật khẩu" class="input_field password">
               <input type="password" name="cpassword" required placeholder="Nhập lại mật khẩu" class="input_field password cpassword">
               <input type="text" name="name" required placeholder="Nhập họ tên người dùng" class="input_field password cpassword">
               <input type="text" name="addres" required placeholder="Nhập địa chỉ" class="input_field password cpassword">
               <input type="text" name="phone_number" required placeholder="Nhập số điện thoại" class="input_field password cpassword">

               <div class="btn">
                    <input type="submit" name="register" class="btn__login" value="Đăng ký">
                    <a href="./login_form.php" class="register">Đăng nhập</a>
               </div>
           </form>
       </div>
    </div>

<script src="../app/darkmode_allfile.js"></script>
</body>
</html>