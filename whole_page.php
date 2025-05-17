<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Public Domain Dashboard</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      height: 100vh;
      width: 100vw;
    }

    .sidebar {
      width: 250px;
      background: #1e1e2f;
      color: #fff;
      padding: 20px;
    }

    .sidebar h2 {
      margin-bottom: 20px;
      font-size: 22px;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin: 15px 0;
    }

    .sidebar ul li a {
      color: #ccc;
      text-decoration: none;
      transition: color 0.3s;
    }

    .sidebar ul li a:hover {
      color: #fff;
    }

    .iframe-container {
      flex: 1;
      overflow: hidden;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="sidebar">
    <h2>Test sidebar</h2>
    <ul>
      <li><a href="#">This</a></li>
      <li><a href="#">Is</a></li>
      <li><a href="#">Admin Page</a></li>
    </ul>
  </div>

  <div class="iframe-container">
    <iframe src="https://pub-domain.onrender.com"
        style="zoom: 70%"></iframe>
  </div>
</div>

</body>
</html>
