<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Category</title>
</head>
<body>
    <h1>List Category</h1>
    <hr/>
    <table border="1px">
        <thead>
            <tr>
                <th>id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $cate): ?>
                <tr>
                    <td><?php echo $cate['id']; ?></td>
                    <td><?php echo $cate['cate_code']; ?></td>
                    <td><?php echo $cate['cate_name']; ?></td>
                    <td><?php echo $cate['cate_status']; ?></td>
                    <td>
                        <a href="#">Edit</a> | 
                        <a href="#">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>