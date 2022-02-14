<?php 

include '../connectDB.php';

session_start();



if(!empty($_SESSION['username'])) {
    // echo "<script>alert('Đã có username');</script>";
    $username = $_SESSION['username'];
    $id_user = $_SESSION['id_username'];
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
            <h1>Add status</h1>
        </div>
        <div class="grid__item2 main">
            <form action="" method="post">
                <textarea class="content" name="content" required></textarea>
                <input type="submit" class="submit" name="submit" value="Gửi">
            </form>
        </div>
        <div class="grid__item3 footer"></div>
    </div>
    <!-- insert status -->
    <?php 

        if(isset($_POST['submit']) && ($_POST['submit'])) {
            // $insert = "INSERT INTO status(content, benhnhan_id)
            // VALUES(:content, :benhnhan_id)";
    
            // $data = [
            //     "content" => $_POST['content'],
            //     "benhnhan_id" => $id
            // ];
    
            // $stmt = $pdo->prepare($insert);
    
            // if($stmt->execute($data)) {
            //     echo '<script language="javascript">';
            //     echo 'alert("Successful")';
            //     echo '</script>';
            // } else {
            //     echo '<script language="javascript">';
            //     echo 'alert("Failed!")';
            //     echo '</script>';
            // }
                $insert = "INSERT INTO status(content, benhnhan_id)
                VALUES (:content, :benhnhan_id)";
    
                $data = [
                    "content" => $_POST['content'],
                    "benhnhan_id" => $id_user,
                ];
    
                $stmt = $pdo->prepare($insert);
    
                // $stmt->execute($data);
                if($stmt->execute($data)) {
                    echo '<script language="javascript">';
                    echo 'alert("Successful")';
                    echo '</script>';
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Failed")';
                    echo '</script>';
                }
        }
        

        
    ?>
</body>
</html>