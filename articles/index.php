<?php
require_once '../connection/connection.php';

$sql = "SELECT * FROM `articles` ORDER BY `id` ASC";
$result = $db -> query($sql);

function srt($text){
  if (strlen($text) > 300) {
    echo substr($text, 0, 300) . '...';
  } else {
    echo $text;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Пермь Time</title>
</head>
<body>
  <header>
    <div>
      <h1 style="text-align: center;">Сегодня в выпуске</h1>
      <a href="create_article.php">Написать свою статью</a>
      <?php foreach($result as $article):?>
        <input type="hidden" name="id" value="<?= $article[0]?>">
        <h2 name="hed"><?= $article[1]?></h2>
        <p name="article"><?= srt($article[2])?>
        <a href="comennts.php?id=<?= $article[0]?>">Read more</a>
      <?php endforeach ?>
    </div>
  </header>
  <script>
    
  </script>
</body>
</html>