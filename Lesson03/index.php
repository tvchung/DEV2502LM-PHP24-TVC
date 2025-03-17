<?php 
    session_start();
    echo "<h1> Đây là phiên làm việc của người dùng:". session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        // header 
        include("fragments/header.php");
    ?>
    <section class="container border my-1">
        <div class="row">
            <?php 
                require("fragments/nav-bar.php");
            ?>
        </div>
    </section>
    <section class="content-body container border my-1">
        <?php
            // require("fragments/wrongfile.php");
            //include("fragments/wrongfile.php");
        ?>
    </section>

    <?php
        if(isset($_REQUEST["btnCleanSession"])){
            unset($_SESSION['member']); // Hủy biến session: member
            // hủy toàn bộ
            session_destroy();
        }
    ?>

    <section>
        <h2>Lấy giá trị từ _SESSION </h2>
        <?php
                if(isset($_SESSION["member"])){
                    echo "<h3> Xin chào, ". $_SESSION["member"];
                }else{
                    echo "Chưa lưu session";
                }
        ?>

        <form action="" method="post">
            <button name="btnCleanSession">Hủy session</button>
        </form>
    </section>
    <?php
        include("fragments/footer.php");
    ?>
</body>
</html>