<?php
require_once "db.php";

$stmt = $pdo->query( "SELECT comment.content, comment.created_at, user.username
FROM comment
JOIN user ON comment.user_id = user.id
ORDER BY comment.created_at DESC");
$comments = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>一言掲示板 - 投稿一覧</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>📜 投稿一覧</h1>
    <p><a href="form.php">← 投稿フォームへ戻る</a></p>
    <hr>
    <?php if (count($comments) === 0): ?>
        <p>まだ投稿がありません。</p>
    <?php else: ?>
        <?php foreach ($comments as $row): ?>
            <div class="post">
                <p><strong><?= htmlspecialchars($row['username']) ?></strong> さん (<?= htmlspecialchars($row['created_at']) ?>)</p>
                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
