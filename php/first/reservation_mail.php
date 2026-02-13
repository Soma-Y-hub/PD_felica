<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約確認</title>
</head>
<body>
    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        // 入力データの取得
        $reservation_time = htmlspecialchars($_POST['reservation_time'], ENT_QUOTES, 'UTF-8');
        $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
        $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8');
        $age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
        $symptoms = htmlspecialchars($_POST['symptoms'], ENT_QUOTES, 'UTF-8');
        $additional_notes = htmlspecialchars($_POST['additional_notes'], ENT_QUOTES, 'UTF-8');

        // メール送信設定
        $to = "c1304754@st.kanazawa-it.ac.jp"; // 管理者メールアドレス
        $title = "診療予約通知";
        $content = <<<EOT
以下の内容で診療予約が行われました。

予約日時: $reservation_time
患者名: $last_name $first_name
年齢: $age 歳

簡単な症状:
$symptoms

その他の記載:
$additional_notes
EOT;

        // メール送信処理
        if (mb_send_mail($to, $title, $content)) {
            echo "<h1>予約が完了しました！</h1>";
            echo "<p>以下の内容で予約を受け付けました。</p>";
            echo "<ul>";
            echo "<li>予約日時: $reservation_time</li>";
            echo "<li>患者名: $last_name $first_name</li>";
            echo "<li>年齢: $age 歳</li>";
            echo "<li>簡単な症状: $symptoms</li>";
            echo "<li>その他の記載: $additional_notes</li>";
            echo "</ul>";
        } else {
            echo "<h1>エラー</h1>";
            echo "<p>メールの送信に失敗しました。</p>";
        }
    ?>
</body>
</html>