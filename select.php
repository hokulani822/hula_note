<?php
//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db_kadai;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONECT:'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_kadai_hula";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = [];
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
} else {
  //全データ取得
  $values = $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hula Note 会員一覧</title>
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
    max-width: 90%;
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
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
    border: 1px solid #e1bee7;
    padding: 12px;
    text-align: left;
  }
  th {
    background-color: #9c27b0;
    color: white;
  }
  tr:nth-child(even) {
    background-color: rgba(225, 190, 231, 0.3);
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
    <a class="navbar-brand" href="index.php">データ登録</a>
  </nav>
</header>

<div class="container">
  <h1>Hula Note 会員一覧</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>年齢</th>
      <th>Tel</th>
      <th>Email</th>
      <th>フラ歴（年）</th>
      <th>教室名</th>
      <th>登録日時</th>
    </tr>
    <?php foreach($values as $value): ?>
    <tr>
      <td><?php echo htmlspecialchars($value["id"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["name"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["age"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["tel"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["email"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["hulareki"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["halauname"], ENT_QUOTES, 'UTF-8'); ?></td>
      <td><?php echo htmlspecialchars($value["indate"], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

</body>
</html>