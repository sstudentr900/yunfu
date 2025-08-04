<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多張卡片 Holo 與顯著滑鼠傾斜效果</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #1a1a1a;
            font-family: Arial, sans-serif;
            gap: 20px;
            padding: 20px;
        }
        .card {
            width: 300px;
            height: 400px;
            background: linear-gradient(135deg, #333, #555);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease; /* 更快、更靈敏的傾斜過渡 */
            transform-style: preserve-3d;
            perspective: 500px; /* 減小透視深度，增強 3D 感 */
        }
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(
                circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                rgba(255, 255, 255, 0.5) 0%, /* 更亮的光澤 */
                rgba(255, 255, 255, 0) 50% /* 縮小範圍，集中光澤 */
            );
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        .card.hovered::before {
            opacity: 1;
        }
        .card-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .card-content h2 {
            margin: 0;
            font-size: 24px;
        }
        .card-content p {
            margin: 10px 0 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-content">
            <h2>卡片 1</h2>
            <p>第一張全息卡，滑鼠移動體驗效果！</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>卡片 2</h2>
            <p>第二張全息卡，閃耀的光澤！</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <h2>卡片 3</h2>
            <p>第三張全息卡，獨特的光影！</p>
        </div>
    </div>
    <script>
        const cards = document.querySelectorAll('.card');
        if (cards.length > 0) {
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;
                    card.style.setProperty('--mouse-x', `${x}%`);
                    card.style.setProperty('--mouse-y', `${y}%`);
                    const rotateY = (x - 50) / 2.5; /* 更大傾斜，±20 度 */
                    const rotateX = (50 - y) / 2.5;
                    card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
                    card.classList.add('hovered');
                });
                card.addEventListener('mouseleave', () => {
                    card.classList.remove('hovered');
                    card.style.transform = 'rotateY(0deg) rotateX(0deg)';
                });
            });
        }
    </script>
</body>
</html>