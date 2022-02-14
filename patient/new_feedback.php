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
    <title>Document</title>
    <link rel="stylesheet" href="../styles/grid__container.css">
</head>
<body>
    <div class="container">
        <div class="grid__item1 header">
            <h1>Feedback
            </h1>
            
        </div>
        <div class="grid__item2 main">
            <form action="" method="post">
                <textarea class="content" name="comment" required></textarea>
                <input type="submit" class="submit" value="Gửi">
            </form>
        </div>
        <div class="grid__item3 footer"></div>
    </div>
    <!--  -->
</body>
</html>