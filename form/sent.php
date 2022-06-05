<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>お問い合わせいただきありがとうございます。</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
       <?php echo $_POST['category']; ?>
      
      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
  </div>
</body>
</html>