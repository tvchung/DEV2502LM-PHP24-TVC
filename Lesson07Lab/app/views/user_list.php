
<h1>Danh sách người dùng</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user['username']; ?></li>
    <?php endforeach; ?>
</ul>
