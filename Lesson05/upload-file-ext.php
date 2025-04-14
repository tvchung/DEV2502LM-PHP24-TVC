<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <?php
        // Thực hiện upload file lên server
        if(isset($_REQUEST['btnUpload'])){
            // kiểm tra nếu có lỗi trong việc upload
            if($_FILES['uploadFile']['error'] !== UPLOAD_ERR_OK){
                echo "Lỗi khi tải file";
                exit;
            }
            // lấy thông tin file
            $fileTmpPath = $_FILES["uploadFile"]["tmp_name"];
            $fileName = $_FILES["uploadFile"]["name"]; // tên file gốc
            $fileSize = $_FILES["uploadFile"]["size"];
            $fileType = $_FILES["uploadFile"]["type"];

            // Tạo tên file mới
            $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
            $newFileName = time() .'-' . uniqid().'.'.$fileExtension;
            
            // đường dẫn (thư mục chứa file upload)
            $destDir = "uploads/";
            // Tạo đường dẫn đầyy đủ
            $destPath = $destDir . basename($newFileName);
            // Kiểm tra file có tồn tại không
            // if(file_exists($destPath)){
            //     echo "File đã tồn tại";
            //     exit;
            // }

            // Di chuyển file từ tạm thời đến thư mục đích
            if(move_uploaded_file($fileTmpPath,$destPath)){
                echo "Upload file thành công.";
                echo "<img src = ".$destPath."/>";
            }else{
                echo "Lỗi khi chuyển file";
            }
        }
    ?>
    <h1>Upload file</h1>
    <hr/>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="uploadFile">Chọn file:</label>
        <input type="file" name="uploadFile" id="uploadFile">
        <button name="btnUpload">Upload</button>
    </form>
</body>
</html>