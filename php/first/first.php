<!DOCTYPE html>
<html lang="ja">
<!--http://localhost/php/first/first.php-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .container {
            display: flex;
            justify-content: center; /* 中央揃え */
            align-items: center;    /* 垂直方向も中央揃え */
            flex-wrap: wrap;       /* 必要に応じて折り返し */
            gap: 20px;             /* 要素間の間隔 */
            margin: 20px;
        }

        .item {
            text-align: center;
        }

        .item h2 {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 10px;
        }

        .item a img {
            width: 150px;
            height: auto;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .item a img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
    <h1>野々市市</h1>

    <div class="container">
        <div class="item">
            <h2>新規登録</h2>
            <a href="http://localhost/php/first/new/new.php"><img src="new.png" alt="新規ログイン"></a>
        </div>
        <div class="item">
            <h2>ログイン</h2>
            <a href="http://localhost/php/first/login/login.php"><img src="login.png" alt="ログイン"></a>
        </div>
        <div class="item">
            <h2>タッチでログイン</h2>
            <a href="http://localhost/php/first/tach/test.php"><img src="tach.png" alt="タッチでログイン"></a>
        </div>
        <div class="item">
            <h2>ログインしない</h2>
            <a href="http://localhost/php/first/unlogin/unlogin.php"><img src="unlogin.png" alt="ログインしない"></a>
        </div>
    </div>

    <footer id="footer">
        金沢工業大学情報工学科PD実践
    </footer>
</body>
</html>
