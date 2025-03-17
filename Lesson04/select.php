<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc dữ liệu từ bảng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <?php
        //1. Kết nối db
        include("connectdb.php");

        //2. Tạo truy vấn đọc dữ liệu
        $sql = "SELECT  * FROM tvcusers WHERE 1=1 ";

        //3. Thực thi câu lệnh truy vấn
        $resultSet = $pdo->query($sql);

        //4. Đọc dữ liệu trong tập kết quả $resultSet
        // while($row = $resultSet->fetch(PDO::FETCH_ASSOC)){
        //     echo "<li> " . $row['fullName'];
        // }
    ?>

    <div class="container my-3 p-3">
    <h1>Đọc dữ liệu từ bảng</h1>
    <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>FullNane</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt=0; 
                    while($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
                        $stt++;
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'];?>">Sửa</a>
                        <a href="delete.php?id=<?php echo $row['id'];?>" 
                            onclick="return confirm('Bạn có muốn xóa không?');"> Xóa</a>
                    </td>
                </tr>
                <?php 
                    endwhile;
                ?>
            </tbody>
        </table>
        <a href="insert.php"> Thêm mới user</a>
    </div>
</body>
</html>