<?php
require_once '../connection/connection.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `articles` WHERE `id` = '$id'";
$result = $db -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  <a href="index.php">Назад</a>
  <header>
    <div>
      <?php foreach($result as $article): ?>
        <input type="hidden" name="id" value="<?= $article[0]?>">
        <h1><?= $article[1]?></h1>
        <p><?= $article[2]?></p>
        <?php endforeach?>
    </div>
    <hr>
      <h4>Коменнтарии к статье</h4>
      <div id="infor"></div>
      <input type="hidden" name="id" id="id" value="<?= $id?>">
      <textarea name="body" id="body" cols="30" rows="10"></textarea>
      <input type="submit" id="but">
    <hr>
    <div id="mes"></div>
  </header>
  <script>
    $(document).ready(function(){
      updateComment();
      $("#but").bind("click", function(){
        $.ajax({
          url: "request/set_coment.php",
          type: "POST",
          data: ({body: $("#body").val(), id:$('#id').val()}),
          dataType: "html",
          beforeSend: function(){
            $("#infor").text("Ожидание данных...");
          },
          success: function(data) {
            updateComment();
          }
        });
      });
    });

    function updateComment(){
      $.ajax({
          url: "request/get_coment.php",
          type: "POST",
          data: ({id:$('#id').val()}),
          dataType: "html",
          success: function(data) {
            $('#mes').html(data);
          }
        });
    }
  </script>
</body>
</html>