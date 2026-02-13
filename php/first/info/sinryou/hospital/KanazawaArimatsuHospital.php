<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>診療予約 - 金沢有松病院</title>
    <link rel="stylesheet" href="shinryou.css">
</head>
<body>
    <h1>金沢有松病院 - 診療予約フォーム</h1>
    <form action="reservation_mail.php" method="post">
        <table>
            <tr>
                <th>診療予約時間</th>
                <td>
                    <select name="reservation_time" required>
                        <option value="">選択してください</option>
                        <!-- 予約可能時間 -->
                        <option value="2024-12-05 09:00">12月5日 09:00 (〇)</option>
                        <option value="2024-12-05 10:00" disabled>12月5日 10:00 (×)</option>
                        <option value="2024-12-05 10:30" disabled>12月5日 10:30 (×)</option>
                        <option value="2024-12-05 11:00">12月5日 11:00 (〇)</option>
                        <option value="2024-12-05 11:30">12月5日 11:30 (〇)</option>
                        <!-- その他日程は同様に追加 -->
                    </select>
                </td>
            </tr>
            <tr>
                <th>苗字</th>
                <td><input type="text" name="last_name" required></td>
            </tr>
            <tr>
                <th>名前</th>
                <td><input type="text" name="first_name" required></td>
            </tr>
            <tr>
                <th>年齢</th>
                <td><input type="number" name="age" required min="0"></td>
            </tr>
            <tr>
                <th>簡単な症状</th>
                <td><textarea name="symptoms" rows="4" cols="40" required></textarea></td>
            </tr>
            <tr>
                <th>その他</th>
                <td><textarea name="additional_notes" rows="4" cols="40"></textarea></td>
            </tr>
        </table>
        <button type="submit">確認画面へ</button>
    </form>
</body>
<footer id="footer">
        金沢工業大学情報工学科PD実践
    </footer>
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