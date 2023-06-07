<?php
require_once '../../connection/connection.php';

  $id = $_POST['id'] ;

  $sql = "SELECT * FROM `comments` WHERE `articles_id` = :id ORDER BY `id` ASC";
  $chec = $db->prepare($sql);
  $chec -> execute(['id'=>$id,]);
  $result = $chec->fetchAll();


  ?>
    <ul>
      <?php foreach($result as $res){?>
      <li><?=$res['text']?></li>
  <?php } ?>   
    </ul>
    <?php
  
  


