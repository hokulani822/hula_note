<?php
//1. POSTデータ取得
$name      = $_POST["name"];
$age       = $_POST["age"];
$tel       = $_POST["tel"];
$email     = $_POST["email"];
$hulareki  = $_POST["hulareki"];
$halauname = $_POST["halauname"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db_kadai;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB_CONECT:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO gs_kadai_hula(name,age,tel,email,hulareki,halauname,indate)VALUES(:name, :age, :tel, :email, :hulareki, :halauname, sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',      $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age',       $age,    PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tel',       $tel,    PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email',     $email,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hulareki',  $hulareki,  PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':halauname', $halauname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header("Location: index.php");
  exit();
}
?>
