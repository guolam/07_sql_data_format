<?php

// DB接続

$dbn = 'mysql:dbname=gsf_d12_13;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}


// SQL作成&実行
$sql = "SELECT namae, sexuality, tel, email, post_code, jyusho, reason FROM work7 ORDER BY post_code ASC";
$stmt = $pdo->prepare($sql);

//失敗すると "sql error"が出力される

try {
  $status = $stmt->execute();
  // $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

//実行後の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";


// var_dump($result);
// exit();


foreach ($result as $record) {
  $output .= "
  <tr>
  <td>{$record["post_code"]}</td>
  <td>{$record["jyusho"]}</td>
  <td>{$record["namae"]}</td>
  <td>{$record["sexuality"]}</td>
  <td>{$record["email"]}</td>
  <td>{$record["tel"]}</td>
  <td>{$record["reason"]}</td>
  </tr>";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>データ一覧</title>
</head>

<body>
  <fieldset>
    <legend>データ一覧</legend>
    <a href="questionnaire_input_answer.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>post code</th>
          <th>address</th>
          <th>name</th>
          <th>sexuality</th>
          <th>email</th>
          <th>tel</th>
          <th>reason</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>