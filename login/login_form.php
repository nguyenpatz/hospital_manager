<?php

require '../connectDB.php';

session_start();

if(isset($_POST['login'])) {
    try {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    
        $select = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        $stmt = $pdo->prepare($select);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($count > 0 && !empty($row)) {
            // $msg = "Đăng nhập thành công";
            $_SESSION['username'] = $username;
            header("location: ../patient/dashboard_patient.php");
        } else {
            $error = "Incorrect username or password!!";
        }
    }
    
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <div class="container">
       <div class="login__container">
           <form action="" method="post" class="login__form">
               <?php 
               
                    if(isset($error)) {
                        echo "<span>".$error."</span>";
                    } else if(isset($msg)) {
                        echo "<span>".$msg."</span>";
                    }
               ?>
               <input type="text" name="username" required placeholder="Tài khoản" class="username">
               <input type="password" name="password" required placeholder="Mật khẩu" class="password">
               <div class="btn">
                    <input type="submit" name="login" class="btn__login" value="Đăng nhập">
                    <a href="./register_form.php" class="register">Đăng ký</a>
               </div>
           </form>
       </div>
    </div>
</body>
</html>

