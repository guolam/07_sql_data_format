<?php

var_dump($_POST); //入力したデータここに来る
// exit;

if (
    !isset($_POST["Q1"]) || $_POST["Q1"] === "" || //todoが入力されない、空だった
    !isset($_POST["Q2"]) || $_POST["Q2"] === "" ||
    !isset($_POST["Q3"]) || $_POST["Q3"] === "" ||
    !isset($_POST["Q4"]) || $_POST["Q4"] === "" ||
    !isset($_POST["Q5"]) || $_POST["Q5"] === "" ||
    !isset($_POST["Q6"]) || $_POST["Q6"] === "" ||
    !isset($_POST["Q7"]) || $_POST["Q7"] === "" ||
    !isset($_POST["Q8"]) || $_POST["Q8"] === ""
) {
    exit("ParaError");
}

$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];

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

$sql = 'INSERT INTO mountain_life (id, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, created_date, updated_date) VALUES (NULL, :Q1, :Q2, :Q3, :Q4, :Q5, :Q6, :Q7, :Q8, now(), now())';

// exit;

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':Q1', $Q1, PDO::PARAM_STR);
$stmt->bindValue(':Q2', $Q2, PDO::PARAM_STR);
$stmt->bindValue(':Q3', $Q3, PDO::PARAM_STR);
$stmt->bindValue(':Q4', $Q4, PDO::PARAM_STR);
$stmt->bindValue(':Q5', $Q5, PDO::PARAM_STR);
$stmt->bindValue(':Q6', $Q6, PDO::PARAM_STR);
$stmt->bindValue(':Q7', $Q7, PDO::PARAM_STR);
$stmt->bindValue(':Q8', $Q8, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header("Location:input_customer.php");
exit();
