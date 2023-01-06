<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>入力フォーム</title>
</head>

<body>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8">
  </script>

  <form class="h-adr line_space" action="create_customer.php" method="POST">
    <fieldset>
      <legend>会員登録</legend>
      <a href="read_customer.php">一覧画面</a>
      <div>
        名前: <input type="text" name="namae" placeholder="真島吾朗">
      </div>
      性別:
      <div class="yama">

        <input type="radio" name="sexuality" value="女性" id="sex1">
        <label for="sex1" class="label">女性</label>
        <input type="radio" name="sexuality" value="男性" id="sex2">
        <label for="sex2" class="label"> 男性</label>
        <input type="radio" name="sexuality" value="その他" id="sex3">
        <label for="sex3" class="label">その他</label>
      </div>

      <span class="p-country-name" style="display:none;">Japan</span>
      <div> 郵便番号(半角数字):</div>
      〒<input type="text" class="p-postal-code" size="8" maxlength="8" name="post_code" pattern="\d{3}-?\d{4}" placeholder="100-1100"><br>
      住所：<input type="text" class="p-region p-locality p-street-address p-extended-address" name="jyusho" placeholder="大阪府蒼天堀3丁目1番地">
      <div>
        電話番号：<input type="tel" name="tel" placeholder="0901110909 (ハイフンなし)">
      </div>
      <div>
        メールアドレス：<input type="email" placeholder="info@example.com" name="email">
      </div>
      <div class="check">
        診断したい理由(複数選択可)<br>
        <input type="checkbox" name="reason[]" value="自分のことをもっと知りたい" id="reason1">
        <label for="reason1" class="label">自分のことを知りたい </label>
        <input type="checkbox" name="reason[]" value="自分の点数(現在地)が気になる" id="reason2">
        <label for="reason2" class="label">自分の点数が気になる </label>
        <input type="checkbox" name="reason[]" value="面白いから" id="reason3">
        <label for="reason3" class="label">面白いから</label>
      </div>
      <br>
      <br> <br>
      <button href="read_answer.php">決定</button>

      <!-- <input type="submit" class="button" href="read_answer.php" value="送信"> -->
      </div>
    </fieldset>
  </form>

</body>

</html>