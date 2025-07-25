<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>耘馥設計客戶詢問</title>
  <style>
    .container {
      font-family: Arial, sans-serif;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .header {
      background-color: #c4a27c;
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
      <h1>來自 耘馥設計客戶詢問</h1>
    </div>
    <div class="content">
      <p>客戶名稱: {{ $input['name'] }}</p>
      <p>客戶電話: {{ $input['phone'] }}</p>
      <p>客戶信箱: {{ $input['email'] }}</p>
      <p>客戶來自: {{ $input['source'] }}</p>
      <p>客戶描述: {{ $input['tinymce'] }}</p>
      <!-- <br> -->
      <!-- <p class="signature">來自 耘馥設計客戶詢問</p> -->
    </div>
  </div>
</body>

</html>