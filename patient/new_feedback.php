<?php 

include '../connectDB.php';

session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");


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
            <h1>Feedback
            </h1>
            
        </div>
        <div class="grid__item2 main">
            <form action="" method="post" class="grid__form">
                <!-- dichvu -->
                <div class="flex-item flex1">
                    <label for="dichvu">Dịch vụ</label>
                    <select name="dichvu" id="dichvu">
                        <option value="Very good">Very good</option>
                        <option value="Not bad">Not bad</option>
                        <option value="Not good">Not good</option>
                    </select>
                </div>
                
                <!-- end dichvu -->

                <!-- ngaylam -->
                <div class="flex-item flex2">
                    <label for="ngaylam">Ngày làm đơn</label>
                    <input type="text" name="ngaylam" id="ngaylam" value="<?php 
                        $ngaylam = date("d-m-Y h:i:sa");
                        echo $ngaylam;
                        ?>" disabled>
                </div>
                <!-- end ngaylam -->
                
                <!-- nhanxet -->
                <div class="flex-item flex3">
                    <textarea type="text" name="nhanxet" required placeholder="Nhận xét"></textarea>
                </div>
                <!-- end nhanxet -->
                <input type="submit" class="submit" name="submit" value="Gửi">
            </form>
        </div>
        <div class="grid__item3 footer"></div>
    </div>
    <!-- insert feedback -->
    <?php 

        if(isset($_POST['submit']) && ($_POST['submit'])) {

            //check value of input
            // if(isset($_POST["dichvu"]) && isset($_POST["ngaylam"]) && isset($_POST["nhanxet"])) {
            //     echo '<script language="javascript">';
            //     echo 'alert("Successful")';
            //     echo '</script>';
            // } else {
            //     echo '<script language="javascript">';
            //     echo 'alert("Failed")';
            //     echo '</script>';
            // }

            $insert = "INSERT INTO feedback(dichvu, ngaylam, nhanxet, benhnhan_id)
            VALUES(:dichvu, :ngaylam, :nhanxet, :benhnhan_id)";

            $data = [
                "dichvu" => $_POST["dichvu"],
                "ngaylam" => $ngaylam,
                "nhanxet" => $_POST['nhanxet'],
                "benhnhan_id" => $id_user
            ];

            $stmt = $pdo->prepare($insert);

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