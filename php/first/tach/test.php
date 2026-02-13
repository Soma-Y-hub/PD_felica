<?php
	$err_msg = "";

	if(isset($_POST['signin'])){
		$IDm = $_POST['IDm'];

		try {
			// データベース接続
			$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
			// SQL文の準備
			$sql = 'SELECT COUNT(*) FROM users WHERE IDm=?';
			$stmt = $db->prepare($sql);
			$stmt->execute([$IDm]);
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
		}
			catch (PDOException $e) {
				$err_msg = "エラー: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
			}
	} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
	<title>USBDevice Test</title>
	<style>
		.textCenter { text-align: center ; }
		.smfont { font-size: 0.7em; }
	</style>
</head>
<body>
	<h3>
		<div class="header-title textCenter">
			USBDevice Test
		</div>
	</h3>

    <div class="mainArea">
		<div class="button textCenter">
			<button id="exe">Execute</button>
		</div>
		
		
    
    	<!-- テキストボックスを追加 -->
		<form action="" method="post">
    		<label for="idmOutput">IDm:</label>
    		<input type="text" id="idmOutput" name='IDm' readonly>
			<button name="signin" type="submit">ログイン</button>
		</form>
		<?php if (!empty($err_msg)): ?>
            <p style="color: red; text-align: center;"><?= htmlspecialchars($err_msg, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    
    <!-- メッセージ表示エリア -->
    	<div id="messageTitle"></div>

		<div class="message">
			<div id="message-title" class="message-title" style="display: inline;"></div><br>
			<div id="message" class="message-info smfont" style="display: inline;"></div>
		</div>
		<script src="test.js"></script>
		<footer id="footer">
			金沢工業大学情報工学科PD実践
		</footer>
	</div>


</body>
</html>
<style>

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
