<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-1">
        <h1>ログイン</h1>
        <div class="login-form">
        <form action="check.php" method="post">
                <p>メールアドレス</p>
                <input class="text" type="text" name="username" placeholder="  Email">
                <p>パスワード</p>
                <input class="text" type="password" name="password" placeholder="  Password"><br><br>
                <input class="button" type="submit" value="ログイン">
            </form>
        </div>
</body>
</html>
