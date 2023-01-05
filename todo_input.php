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

  <form class="h-adr" action="todo_create.php" method="POST">
    <fieldset>
      <legend>会員登録</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="namae" placeholder="真島吾朗">
      </div>
      <span class="p-country-name" style="display:none;">Japan</span>
      〒<input type="text" class="p-postal-code" size="8" maxlength="8" name="post_code" pattern="\d{3}-?\d{4}" placeholder="100-1100"><br>
      住所：<input type="text" class="p-region p-locality p-street-address p-extended-address" name="jyusho" placeholder="大阪府蒼天堀3丁目1番地">
      <div>
        電話番号：<input type="tel" name="tel" placeholder="0901110909 (ハイフンなし)">
      </div>
      <div>
        メールアドレス：<input type="email" placeholder="info@example.com" name="email">
      </div>

      <button>決定</button>
      </div>
    </fieldset>
  </form>

</body>

</html>