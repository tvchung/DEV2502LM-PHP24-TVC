<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    if(isset($_REQUEST["btnSave"])){
        //1. Kết nối db
        include("connectdb.php");
        //2. Lấy dữ liệu trên form thêm
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $active = $_POST["active"];

        // die( $active);
        //3. Tạo truy vấn thêm mới
        $sql = "INSERT INTO tvcusers(fullName,email,phone,active) ";
        $sql .=" VALUES(:fullName,:email,:phone,:active)";
        // Chuẩn hóa câu lệnh
        $stmt = $pdo->prepare($sql);
        // 4. Thực hiện câu lệnh truy vấn
        $stmt->execute([
            ':fullName'=>$fullName,
            ':email'=>$email,
            ':phone'=>$phone,
            ':active' => $active
        ]);

        header("Location:select.php");
    }
       
    ?>
    <section class="container border my-3 p-3">
        <h1>Thêm mới user </h1>
        <form action="" method="post">
            <div>
                FullName: <input type="text" name="fullName" />
            </div>
            
            <div>
                Email: <input type="email" name="email" />
            </div>
            <div>
                Phone: <input type="tel" name="phone" />
            </div>
            <div>
                Active: 
                    <input type="radio" name="active" id="actHoatDong" value="1" /> <label for="actHoatDong"> Hoạt động</label>
                    <input type="radio" name="active" id="actKhoa" value="0"/> <label for="actKhoa"> Khóa</label>
            </div>
            <button name="btnSave">Save</button>
        </form>
    </section>
</body>
</html>