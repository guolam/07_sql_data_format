<?php
// POSTデータ確認
var_dump($_POST); //入力したデータここに来る
// exit;

if (
    !isset($_POST["namae"]) || $_POST["namae"] === "" || //todoが入力されない、空だった
    !isset($_POST["sexuality"]) || $_POST["sexuality"] === "" ||
    !isset($_POST["tel"]) || $_POST["tel"] === "" ||
    !isset($_POST["email"]) || $_POST["email"] === "" ||
    !isset($_POST["post_code"]) || $_POST["post_code"] === "" ||
    !isset($_POST["jyusho"]) || $_POST["jyusho"] === "" ||
    !isset($_POST["reason"]) || $_POST["reason"] === ""
) {
    exit("ParaError");
}

$namae = $_POST["namae"];
$namae = preg_replace("/( |　)/", "", $namae);
$namae = mb_convert_kana($namae, "rna");

$sexuality = $_POST["sexuality"];

$tel = $_POST["tel"];
$tel = mb_convert_kana($tel, "rna");

$email = $_POST["email"];
$email = mb_convert_kana($email, "rna");

$post_code = $_POST["post_code"];
$post_code =
    substr($post_code, 0, 3) . "-" . substr($post_code, 3);
$post_code = mb_convert_kana($post_code, "rna");

$jyusho = $_POST["jyusho"];
$jyusho = mb_convert_kana($jyusho, "rnaKCs");

$reason = $_POST["reason"];
$reason = implode(',', $_POST['reason']);


// DB接続

// 各種項目設定
$dbn = 'mysql:dbname=gsf_d12_13;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


// SQL作成&実行

$sql = 'INSERT INTO work7 (id, namae, sexuality, tel, email, post_code, jyusho, reason, created_at, updated_at) VALUES (NULL, :namae, :sexuality, :tel, :email, :zipcode, :jyusho, :reason, now(), now())';

// exit;

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':namae', $namae, PDO::PARAM_STR);
$stmt->bindValue(':sexuality', $sexuality, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':zipcode', $post_code, PDO::PARAM_STR);
$stmt->bindValue(':jyusho', $jyusho, PDO::PARAM_STR);
$stmt->bindValue(':reason', $reason, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:read_answer.php");
exit();
