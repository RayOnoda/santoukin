<?php
session_start();
require_once "db.php";

if (!isset($_SESSION['user_id'])){
    exit('ログインしていません。');
}

$user_id = $_SESSION['user_id'];

$name = htmlspecialchars($_POST['name'] ?? '名無し');
$comment = htmlspecialchars($_POST['comment'] ?? '');
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');

if (trim($comment) === '') {
    header("Location: form.php");
    exit;
}
$user_id = $_SESSION['user_id'];

$pdo = connectDB_local();
$stmt = $pdo->prepare("INSERT INTO comment (user_id, content, created_at) VALUES (?,?,?)");
$stmt->execute([$user_id, $comment, $time]);
header("Location: view.php");
exit;
?>