<?php
require_once '../../connection/connection.php';

if(!empty($_POST['body'])){
  $body = $_POST['body'];
  $id = $_POST['id'];


  $sql = "INSERT INTO `comments` (`id`, `articles_id`, `text`) VALUES (NULL, :id, :body)";
  $chec = $db->prepare($sql);
  $chec -> execute(['id'=>$id, 'body'=>$body]);
  echo "все ок";
}else {
  echo "не ок";
}


