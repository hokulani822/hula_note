<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Hula Note 会員登録</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('img/hawaii.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    h1 {
      color: #9c27b0;
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      color: #6a1b9a;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #e1bee7;
      border-radius: 5px;
      font-size: 16px;
    }
    .submit-container {
      text-align: center;
      margin-top: 20px;
    }
    input[type="submit"] {
      background-color: #9c27b0;
      color: #fff;
      border: none;
      padding: 12px 30px;
      font-size: 18px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #7b1fa2;
    }
    .navbar {
      background-color: rgba(156, 39, 176, 0.8);
      padding: 10px 0;
    }
    .navbar-brand {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      margin-left: 20px;
    }
  </style>
</head>
<body>

<header>
  <nav class="navbar">
    <a class="navbar-brand" href="select.php">データ一覧</a>
  </nav>
</header>

<div class="container">
  <h1>Hula Note 会員登録</h1>
  <form method="post" action="insert.php">
    <div class="form-group">
      <label for="name">名前：</label>
      <input type="text" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="age">年齢：</label>
      <input type="text" id="age" name="age">
    </div>
    <div class="form-group">
      <label for="tel">Tel：</label>
      <input type="text" id="tel" name="tel">
    </div>
    <div class="form-group">
      <label for="email">Email：</label>
      <input type="text" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="hulareki">フラ歴（年）：</label>
      <input type="text" id="hulareki" name="hulareki">
    </div>
    <div class="form-group">
      <label for="halauname">教室名：</label>
      <input type="text" id="halauname" name="halauname">
    </div>
    <div class="submit-container">
      <input type="submit" value="登録">
    </div>
  </form>
</div>

</body>
</html>