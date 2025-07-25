<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Email</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .signature {
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>歡迎使用 Laravel 11 郵件功能</h1>
        </div>
        <div class="content">
            <p>親愛的 {{ $mailData['name'] }}，</p>
            <p>這是一封來自 Laravel 11 的測試郵件！</p>
            <p>您可以根據需要自訂此郵件的內容，包含表格、按鈕或圖片等。</p>
            <p class="signature">來自 Laravel 團隊</p>
        </div>
    </div>
</body>
</html>