<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<!--http://localhost/php/first/new/new.php-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .register-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .register-container label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #555;
        }
        .register-container input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .register-container button {
            width: 90%;
            padding: 10px;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .register-container button:hover {
            background: #218838;
        }
        .register-container .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        #footer {
            clear: both;
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
<div class="register-container">
        <h1>新規登録</h1>
        <form action="register.php" method="post">
            <label for="username">ユーザー名</label>
            <input type="text" name="username" id="username" required>
                        
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password" required>
            
            <label for="idmOutput">IDm:</label>
    		<input type="text" id="idmOutput" name='IDm' readonly>
            
            <button id="exe">Execute</button>
            <script src="test.js"></script>
            <?php if (!empty($err_msg)): ?>
            <p style="color: red; text-align: center;"><?= htmlspecialchars($err_msg, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    
            <div class="error" id="error-message"></div>
            
            <button type="submit">登録する</button>
        </form>
    </div>
    <footer id="footer">
        金沢工業大学情報工学科PD実践
    </footer>
</body>
</html>