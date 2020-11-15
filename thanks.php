<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了</title>
</head>
<body>
  <h1>コメントありがとうございます！</h1>
  <div>
    <h3>入力内容</h3>
    <p>名前:<?php echo $name; ?></p>
    <p>メールアドレス:<?php echo $email; ?></p>
    <p>コメント内容:<?php echo $comment; ?></p>
  </div>
</body>
</html>
