<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>

</head>

<body>
    <form method="POST" action="create_answer.php">
        <fieldset>
            <legend>⛰あなたは山での生存率テスト⛰</legend>

            <div id="q_p1">
                <div class="yama">
                    <p>1. あなたは疲れています。今日行く山を決めてください。</p>
                    <input type="radio" name="Q1" value="8" id="Q1A">
                    <label for="Q1A" class="label" required>宝満山</label>
                    <input type="radio" name="Q1" value="4" id="Q1B">
                    <label for="Q1B" class="label">鷹ノ巣山</label>
                    <input type="radio" name="Q1" value="10" id="Q1C">
                    <label for="Q1C" class="label">油山</label>
                    <input type="radio" name="Q1" value="2" id="Q1D">
                    <label for="Q1D" class="label">久住山</label>
                    <p></p>
                </div>

                <div class="yama"><br><br>
                    <p>2. 出発前に、どのアプリやサービスから山情報を確認しますか？</p>

                    <input type="radio" name="Q2" value="2" id="Q2A">
                    <label for="Q2A" class="label" required>YAMAP!!</label>
                    <input type="radio" name="Q2" value="4" id="Q2B">
                    <label for="Q2B" class="label">WEATHER NEWS</label>
                    <input type="radio" name="Q2" value="1" id="Q2C">
                    <label for="Q2C" class="label">ブログ情報</label>
                    <input type="radio" name="Q2" value="10" id="Q2D">
                    <label for="Q2D" class="label">以上全部</label>
                    <p></p>
                </div>

                <div class="yama"><br><br><br><br>
                    <p>3. 今日は35℃の炎天下、あなたはどれくらいのお水を持って行きますか？</p>
                    <input type="radio" name="Q3" value="1" id="Q3A">
                    <label for="Q3A" class="label" required>500m</label>
                    <input type="radio" name="Q3" value="4" id="Q3B">
                    <label for="Q3B" class="label">1L</label>
                    <input type="radio" name="Q3" value="9" id="Q3C">
                    <label for="Q3C" class="label">1.5L</label>
                    <input type="radio" name="Q3" value="6" id="Q3D">
                    <label for="Q3D" class="label">2L</label>
                    <p></p>
                </div>

                <div class="yama"><br><br><br><br><br><br>
                    <p>4. リュックにスペースが足りません。最後のスペース、あなたはどれを持って行きますか？</p>
                    <input type="radio" name="Q4" value="7" id="Q4A">
                    <label for="Q4A" class="label" required>水500ml</label>
                    <input type="radio" name="Q4" value="2" id="Q4B">
                    <label for="Q4B" class="label">カロリーメイト</label>
                    <input type="radio" name="Q4" value="10" id="Q4C">
                    <label for="Q4C" class="label">OS-1</label>
                    <input type="radio" name="Q4" value="5" id="Q4D">
                    <label for="Q4D" class="label">水2L</label>
                    <p></p>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a class="next_btn" href="#q_p2" id="q_p1">次へ</a>
            </div>

            <div id=q_p2 style="display: none;">
                <div class="yama">
                    <p>5. あなたは「立ち入れ禁止」の看板を見たらどう行動しますか？</p>
                    <input type="radio" name="Q5" value="1" id="Q5A">
                    <label for="Q5A" class="label" required>前進する</label>
                    <input type="radio" name="Q5" value="2" id="Q5B">
                    <label for="Q5B" class="label">左へ行く</label>
                    <input type="radio" name="Q5" value="3" id="Q5C">
                    <label for="Q5C" class="label">右へ行く</label>
                    <input type="radio" name="Q5" value="9" id="Q5D">
                    <label for="Q5D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <div class="yama"><br><br>
                    <div>
                        <p>6. そして、木に結んでるピンクのリボンが見えました、あなたはどうしますか？</p>
                    </div>
                    <input type="radio" name="Q6" value="8" id="Q6A">
                    <label for="Q6A" class="label" required>前進する</label>
                    <input type="radio" name="Q6" value="2" id="Q6B">
                    <label for="Q6B" class="label">左へ行く</label>
                    <input type="radio" name="Q6" value="2" id="Q6C">
                    <label for="Q6C" class="label">右へ行く</label>
                    <input type="radio" name="Q6" value="6" id="Q6D">
                    <label for="Q6D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <div class="yama"><br><br><br><br>
                    <div id="Q2" required>
                        <p>7. 天気が悪くなってきて、遠くから雨雲が見えてます、あなたはどうしますか？</p>
                    </div>
                    <input type="radio" name="Q7" value="3" id="Q7A">
                    <label for="Q7A" class="label">前進する</label>
                    <input type="radio" name="Q7" value="2" id="Q7B">
                    <label for="Q7B" class="label">左へ行く</label>
                    <input type="radio" name="Q7" value="1" id="Q7C">
                    <label for="Q7C" class="label">右へ行く</label>
                    <input type="radio" name="Q7" value="9" id="Q7D">
                    <label for="Q7D" class="label">登山口に戻る</label>
                    <p></p>
                </div>
                <br>
                <div class="yama"><br><br><br><br><br>
                    <p>8. 雨が降り出しました、あなたはどうしますか？</p>
                    <input type="radio" name="Q8" value="5" id="Q8A">
                    <label for="Q8A" class="label" required>恐れずに前進</label>
                    <input type="radio" name="Q8" value="3" id="Q8B">
                    <label for="Q8B" class="label">左へ行く</label>
                    <input type="radio" name="Q8" value="7" id="Q8C">
                    <label for="Q8C" class="label">木の下に避難する</label>
                    <input type="radio" name="Q8" value="9" id="Q8D">
                    <label for="Q8D" class="label">登山口に戻る</label>
                    <p></p>
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br>
                <a class="back_btn" href="#q_p1" id="q_p2">戻る</a>
            </div>


        </fieldset>

        <input type="submit" class="button" href="create_answer.php" value="送信">
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>