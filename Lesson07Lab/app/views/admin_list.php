
<h1>Danh sách người dùng</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['adminuser']; ?></li>
    <?php endforeach; ?>
</ul>
