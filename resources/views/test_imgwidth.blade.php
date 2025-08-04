<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSAP Clip-Path Animation</title>
  <style>
    body {
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    }
    img {
      width: 400px;
      height: 300px;
      object-fit: cover;
      clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
    }
  </style>
</head>
<body>
  <img src="https://www.smart-airport-systems.com/wp-content/uploads/three-penguin-2560x1704.jpg" alt="Sample Image">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script>
    gsap.to("img", {
      clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
      duration: 2,
      ease: "power2.out"
    });
  </script>
</body>
</html>