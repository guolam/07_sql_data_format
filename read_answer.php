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
$sql = "SELECT Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8 FROM mountain_life ORDER BY Q1 ASC";
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
  <td>{$record["Q1"]}</td>
  <td>{$record["Q2"]}</td>
  <td>{$record["Q3"]}</td>
  <td>{$record["Q4"]}</td>
  <td>{$record["Q5"]}</td>
  <td>{$record["Q6"]}</td>
  <td>{$record["Q7"]}</td>
  <td>{$record["Q8"]}</td>
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


<!-------------------- html-------------------->

<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>診断結果</title>
</head>

<body>
    <fieldset width="900">
        <legend>診断結果</legend>

        <table>
            <thead>
                <tr>
                    <th id="score"></th>
                </tr>
                <tr>
                    <th id="life_text"></th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
    </fieldset> -->


<!-- js Chart -->
<div class="canvas-container">
    <canvas class="radar" id="myChart"></canvas>
</div>

<div class="botton">
    <a class="arrow_animation_button" href="questionnaire_input_answer.php#q_p1">もう一回診断する</a>
</div>


<div class="botton">
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="私は山での生存率はこれです！" data-hashtags="山好きと繋ぎたい" data-size="large" data-show-count="false">Tweet</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>


<!---------------- javascript ---------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const data = <?= json_encode($array) ?>;


    //yamaの配列で、jasonから取ってきた文字列のデータを数字化する
    const yama = [
        Number(data[0]),
        Number(data[1]),
        Number(data[2]),
        Number(data[3]),
        Number(data[4]),
        Number(data[5]),
        Number(data[6]),
        Number(data[7])
    ];

    //点数計算
    const count_number = yama[0] + yama[1] + yama[2] + yama[3] + yama[4] + yama[5] + yama[6] + yama[7];
    console.log(count_number);

    function cal_num(count_number) {
        return Math.floor(count_number / 8 * 10);
    };



    //割り算  - 選択項目に対する％計算
    console.log(cal_num(count_number));
    let result_num = [];
    result_num.push(cal_num(count_number));

    console.log(result_num);

    const html_number = [];

    html_number.push(`
    <p>あなたの生存率は：${result_num}%</p>`)

    console.log(html_number);
    $("#score").html(html_number);


    // 点数によって、分類
    function mark(result_num) {

        if (result_num < 20)
            return "一旦冷静になりましょう!!!命の保証がないぞ！";
        else if (result_num >= 20 && result_num < 60)
            return "ちゃんと考えてから行動しましょう";
        else if (result_num >= 60 && result_num < 80)
            return "油断したらすぐにも命の危機だぞ！";
        else
            return "山の達人だ!! 危険と思ったら、すぐ帰るのが素晴らしい!";
    };

    console.log(mark(result_num))

    let life = [];

    life.push(`
    <p>アドバイス：${(mark(result_num))}</p>`)

    console.log(life);
    $("#life_text").html(life)



    // //結果を出力する関数
    $('.end').on('click', function() {
        if (countA > countB) {
            $('#answer_01').css("display", ""); //回答1
        } else {
            if (countB > countC) {
                $('#answer_02').css("display", ""); //回答2
            } else {
                $('#answer_03').css("display", ""); //回答3
            }
        }
    });

    //radar chartの図面 - chart.jsより作成
    $(function() {
        var container = $('.canvas-container');
        var chart = $('#chart');
        ctx.attr('width', container.width());
        ctx.attr('height', 300);
    });

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7', 'Q8'],
            datasets: [{
                label: '山での生存率',
                data: [yama[0], yama[1], yama[2], yama[3], yama[4], yama[5], yama[6], yama[7]],
                borderWidth: 3,
                borderColor: 'rgba(135, 208, 204, 0.8)',
                backgroundColor: 'rgba(135, 208, 204, 0.5)',
            }]
        },
        options: {
            scales: {
                r: {
                    angleLines: {
                        display: false
                    },
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }
        }
    });
</script>



</body>

</html>