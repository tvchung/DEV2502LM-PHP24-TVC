<?php
    if(isset($_REQUEST["btnClearCookie"])){
        setcookie("nguoidung","ChungTrinh",time()-60*60);
        
        // Chuyển sang trang index.php
        header("Location:index.php");
    }
?>
<header>
    <div class="container border my-2">
        <div class="row d-flex">
            <div class="logo">
                <a href="">
                    <img src="https://devmaster.edu.vn/images/logo.png" alt="Devmaster Academy">
                </a>
            </div>
            <div class="head-title">
                <h2>VIỆN CÔNG NGHỆ VÀ ĐÀO TẠO DEVMASTER</h2>
                <p>Đào tạo - Phần mềm - Cung cấp/cho thuê nhân sự</p>
            </div>
            <div>
                <h2>Lấy giá trị từ cookie</h2>
                <?php 
                    // in ra một giá trị
                    echo "Xin chào: <b>".$_COOKIE["nguoidung"] ."</b>";
                    echo "<p>";
                    print_r($_COOKIE);
                ?>

                <form action="" method="post">
                    <button name="btnClearCookie">clear cookie</button>
                </form>
            </div>
        </div>
    </div>
</header>