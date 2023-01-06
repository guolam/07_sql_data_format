<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力フォーム</title>
</head>

<body>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8">
  </script>

  <form class="h-adr" action="create_customer.php" method="POST">
    <fieldset>
      <legend>会員登録</legend>
      <a href="read_customer.php">一覧画面</a>
      <div>
        名前: <input type="text" name="namae" placeholder="真島吾朗">
      </div>
      <div>
        性別:
        女性<input type="radio" name="sexuality">
        男性<input type="radio" name="sexuality">
        その他<input type="radio" name="sexuality">
      </div>
      <span class="p-country-name" style="display:none;">Japan</span>
      <div> 郵便番号(半角数字で入力すると、自動表示となります):</div>
      〒<input type="text" class="p-postal-code" size="8" maxlength="8" name="post_code" pattern="\d{3}-?\d{4}" placeholder="100-1100"><br>
      住所：<input type="text" class="p-region p-locality p-street-address p-extended-address" name="jyusho" placeholder="大阪府蒼天堀3丁目1番地">
      <div>
        電話番号：<input type="tel" name="tel" placeholder="0901110909 (ハイフンなし)">
      </div>
      <div>
        メールアドレス：<input type="email" placeholder="info@example.com" name="email">
      </div>
      <div>
        診断したい理由(複数選択可)<br>
        <input type="checkbox" name="reason[]" value="自分のことをもっと知りたい">自分のことをもっと知りたい<br>
        <input type="checkbox" name="reason[]" value="自分の点数(現在地)が気になる">自分の点数(現在地)が気になる<br>
        <input type="checkbox" name="reason[]" value="面白いから">面白いから
      </div>
      <button href="read_answer.php">決定</button>

      <!-- <input type="submit" class="button" href="read_answer.php" value="送信"> -->
      </div>
    </fieldset>
  </form>

</body>

</html>