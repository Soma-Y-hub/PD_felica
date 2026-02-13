<?php
// エラーメッセージの初期状態を空に
$err_msg = "";

// サブミットボタンが押されたときの処理
if (isset($_POST['signin'])) { // ボタン名を修正
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // データベース接続
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL文の準備
        $sql = 'SELECT COUNT(*) FROM users WHERE name=? AND password=?';
        $stmt = $db->prepare($sql);
        $stmt->execute([$username, $password]);
        $result = $stmt->fetchColumn(); // COUNT(*)の結果を直接取得

        // データベース接続を閉じる
        $stmt = null;
        $db = null;

        // ログイン認証が成功した場合
        if ($result > 0) {
            header('Location: http://localhost/php/first/info/info.php');
            exit;
        } else {
            // アカウント情報が間違っていた場合
            $err_msg = "アカウント情報が間違っています。";
        }
    } catch (PDOException $e) {
        $err_msg = "エラー: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        #footer {
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>ログイン</h2>
        <form action="" method="post">
            <label for="signin-id">アカウント</label>
            <input id="signin-id" name="username" type="text" placeholder="email" required>
            <label for="signin-pass">パスワード</label>
            <input id="signin-pass" name="password" type="password" placeholder="pass" required>
            <button name="signin" type="submit">ログイン</button>
        </form>
        <?php if (!empty($err_msg)): ?>
            <p style="color: red; text-align: center;"><?= htmlspecialchars($err_msg, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        
    </div>
</body>

<footer id="footer">
    金沢工業大学情報工学科PD実践
</footer>
</html>
