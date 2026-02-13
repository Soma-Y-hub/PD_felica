<!DOCTYPE html>
<html lang="ja">
<head>  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>観光</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .gallery-item {
            flex: 1 1 calc(33% - 20px);
            max-width: calc(33% - 20px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .gallery-item p {
            margin: 0;
            padding: 10px;
            font-size: 1.2em;
            color: #555;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>観光名所</h1>
        <div class="gallery">
            <div class="gallery-item">
                <a href="onsen.html">
                <img src="img1.jpg" alt="温泉">
                </a>
                <p>温泉</p>
            </div>
            <div class="gallery-item">
                <img src="img1.jpg" alt="おいしいお店">
                <p>おいしいお店</p>
            </div>
            <div class="gallery-item">
                <img src="img1.jpg" alt="きれいな場所">
                <p>きれいな場所</p>
            </div>
        </div>
    </div>
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