<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>診療予約</title>
    <link rel="stylesheet" href="shinryou.css">
</head>
<body>
    <h1>診療予約</h1>
    <p>以下の病院から選択してください。</p>
    <table>
        <tr>
            <th></th>
            <th>病院名</th>
            <th>住所</th>
        </tr>
        <tr>
            <td><button class="toggle-btn" onclick="toggleDetails(this)">▽</button></td>
            <td>扇が丘診療所</td>
            <td>〒921-8812 石川県野々市市扇が丘７−７−１ <a href="https://maps.app.goo.gl/SZSo3Hz41h9n6kLo7" class="btn">マップ</a></td>
        </tr>
        <tr class="details">
            <td colspan="3">
                <a href= "https://select-type.com/rsv/?id=T9lZVEZ2WyA&c_id=380258" class="btn">予約</a> | 電話番号: 012-3456-7890
            </td>
        </tr>
        <tr>
            <td><button class="toggle-btn" onclick="toggleDetails(this)">▽</button></td>
            <td>金沢赤十字病院</td>
            <td>〒921-8162 石川県金沢市三馬２丁目２５１ <a href="https://maps.app.goo.gl/yWh2U52eQWe6p2Jz8" class="btn">マップ</a></td>
        </tr>
        <tr class="details">
            <td colspan="3">
                <button class="btn">予約</button> | 電話番号: 098-7654-3210
            </td>
        </tr>
        <tr>
            <td><button class="toggle-btn" onclick="toggleDetails(this)">▽</button></td>
            <td>金沢有松病院</td>
            <td>〒921-8161 石川県金沢市有松５丁目１−７ <a href="https://maps.app.goo.gl/vMtApNwTsXFsGjHb8" class="btn">マップ</a></td>
        </tr>
        <tr class="details">
            <td colspan="3">
                <button class="btn">予約</button> | 電話番号: 123-4567-8901
            </td>
        </tr>
    </table>

    <script>
        function toggleDetails(button) {
            const currentRow = button.parentElement.parentElement;
            const nextRow = currentRow.nextElementSibling;

            if (nextRow && nextRow.classList.contains("details")) {
                const isVisible = nextRow.style.display === "table-row";
                nextRow.style.display = isVisible ? "none" : "table-row";
                button.textContent = isVisible ? "▽" : "▲";
            }
        }
    </script>
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