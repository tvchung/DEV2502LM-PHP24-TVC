<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửu user </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        // 1. Kêt nối
        include("connectdb.php");
        // Submit form 
        if(isset($_REQUEST['btnSave'])){
            //2. Lấy dữ liệu trên form thêm
            $fullName = $_POST["fullName"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $active = $_POST["active"];
           
            //3. Tạo truy vấn thêm mới
            $sql = "UPDATE tvcusers SET fullName=:fullName,email=:email,phone=:phone,active=:active WHERE id=:id ";

            // Chuẩn hóa câu lệnh
            $stmt = $pdo->prepare($sql);
            // 4. Thực hiện câu lệnh truy vấn
            $stmt->execute([
                ':fullName'=>$fullName,
                ':email'=>$email,
                ':phone'=>$phone,
                ':active' => $active,
                ':id' => $_GET['id']
            ]);

            header("Location:select.php");
        }

        // đọc dữ liệu từ db theo id
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // Tạo truy vấn đọc dữ liệu 
            $sql = "SELECT * FROM tvcusers WHERE id = $id";
            // Thực thi
            $stmt = $pdo->query($sql);
            // đọc 1 bản ghi
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$row) die('không tồn tại');
        }

    ?>
    <section class="container border my-3 p-3">
        <h1>Sửa thông tin user có id: <?php echo $_GET["id"];?> </h1>
        <form action="" method="post">
            <div>
                FullName: <input type="text" name="fullName" value="<?php echo $row['fullName'];?>"/>
            </div>
            
            <div>
                Email: <input type="email" name="email" value="<?php echo $row['email'];?>"/>
            </div>
            <div>
                Phone: <input type="tel" name="phone" value="<?php echo $row['phone'];?>" />
            </div>
            <div>
                Active: 
                    <input type="radio" name="active" id="actHoatDong" value="1" <?php if($row['active']==1) echo 'checked'; ?> /> 
                        <label for="actHoatDong"> Hoạt động</label>
                    <input type="radio" name="active" id="actKhoa" value="0" <?php if($row['active']==0) echo 'checked'; ?>/> 
                        <label for="actKhoa"> Khóa</label>
            </div>
            <button name="btnSave" class="btn btn-primary">Save</button>
            <a href="/select.php" class="btn btn-secondary">Back</a>
        </form>
    </section>
</body>
</html>