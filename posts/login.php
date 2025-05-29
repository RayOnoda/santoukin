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
            <form class="login-form-in" action="tina10-2loginposts_in.php" method="post">
                <p>メールアドレス</p>
                <input class="text" type="email" name="mail" placeholder="  Email">
                <p>パスワード</p>
                <input class="text" type="password" name="password" placeholder="  Password"><br><br>

                <input class="button" type="submit" value="ログイン"><br><br>
            </form>
            <form class="login-form-out" action="tina10-2_logout.php">
                <input class="button" type="submit" value="ログアウト">
            </form>
            <form class="login-form-new" action="tina10-2create.php" method="post">
                <input class="button" type="submit" value="アカウント新規作成">
            </form>
        </div>
</body>
</html>