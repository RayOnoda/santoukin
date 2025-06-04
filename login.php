<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="check.php" method="post">
        ユーザー名: <input type="text" name="username" required><br>
        パスワード: <input type="password" name="password" required><br>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>
