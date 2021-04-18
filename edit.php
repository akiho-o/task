<?php
require_once __DIR__ . '/functions.php';

$dbh = connectDb();

?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/_head.html'; ?>
<body>
    <div class="wrapper">
        <h2>タスク更新</h2>
        <form action="" method="post">
            <input type="text" name="title">
            <input type="submit" value="更新" class="btn submit-btn">
        </form>
        <a href="index.php" class="btn return-btn">戻る</a>
    </div>
</body>
</html>

<!-- エラーが発生した場合、エラーメッセージを出力 -->
<?php if ($errors): ?>
    <ul class="errors">
        <?php foreach ($errors as $error): ?>
            <li><?= h($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>