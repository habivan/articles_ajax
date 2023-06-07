<?php
require_once '../../connection/connection.php';

if(empty($_POST['text']) || empty($_POST['name'])){

  echo 'Вы не заполнили поля';

  ?> <a href="../create_article.php">назад</a> <?php

}else {
  $body = $_POST['text'];
  $name = $_POST['name'];
  $sql = "INSERT INTO `articles` (`id`, `name`, `artile`) VALUES (NULL, :name, :body)";
  $chec = $db->prepare($sql);
  $chec -> execute(['name'=>$name, 'body'=>$body]);

header('Location: ../index.php');

}
?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sapiente incidunt dolorum quo dignissimos adipisci consequuntur accusamus vero eos, corrupti ipsum explicabo beatae optio iure nemo voluptas omnis asperiores praesentium quae distinctio ab voluptatem? Provident id in saepe rem iste omnis, minus enim tenetur tempora, ipsa, iure possimus. Optio, corporis neque labore minus quia tenetur dolor est dolores perferendis nostrum asperiores expedita alias quam a mollitia temporibus ad facere ex fuga! Rem pariatur quas autem dolores ad voluptas aliquid consectetur culpa magni dolorem neque nam, sequi suscipit id illo illum beatae ipsa deserunt commodi dolor, repellendus provident natus placeat eaque! Minima dolor commodi voluptatibus aspernatur porro ducimus, magni nemo deleniti recusandae itaque obcaecati illum! Dolor rerum amet voluptates saepe sunt eos. Voluptates nemo laboriosam amet blanditiis, assumenda similique maiores ipsam labore ad quae, non quidem rem. Culpa similique necessitatibus, exercitationem ad molestias corrupti magnam iste quibusdam ipsam, dolor veritatis, tempora atque eveniet quae temporibus. Accusantium modi tempore consectetur autem doloribus delectus dolor dignissimos, dolores illo recusandae eveniet dolorum beatae quasi tempora velit reiciendis at, facilis nesciunt, ipsam rerum aperiam. Qui corrupti quae officiis sequi molestiae est at nostrum placeat asperiores odit corporis quaerat inventore aut rem quod, amet velit perferendis et doloribus dolorum? Harum atque recusandae molestias vitae cum suscipit est corporis odit dicta officiis aspernatur necessitatibus adipisci temporibus possimus doloribus culpa similique ipsam, quaerat tempore nobis modi incidunt repellat quos dolore? Assumenda quam provident sapiente facilis enim maxime odit quaerat eum sunt in! Quo accusamus repellendus natus suscipit fuga doloribus veniam omnis autem. Dolorum similique et dolor eos aspernatur aperiam, reiciendis itaque quia repudiandae dignissimos explicabo non praesentium ipsam soluta quis voluptas voluptate, maiores ab repellendus dolorem assumenda amet, repellat veniam. Nam possimus dolorem iusto optio ipsam deserunt quos id, excepturi totam eum eos veritatis repellendus quae repudiandae voluptatibus earum iure quas reprehenderit explicabo est? Suscipit quaerat libero optio repellendus minus obcaecati impedit quisquam magnam aliquam voluptatum officia saepe esse cum exercitationem ea ad voluptatibus, autem sed iusto recusandae eveniet quos? Similique, perspiciatis saepe iusto quo repudiandae unde obcaecati necessitatibus ipsam repellendus voluptates. Debitis est minima qui, neque atque hic soluta aspernatur repellendus laudantium numquam cumque incidunt dolore exercitationem amet inventore iusto harum nemo voluptatibus nostrum facilis optio mollitia saepe quaerat. Soluta consectetur maxime voluptatem deleniti nemo nulla! Asperiores sint, molestiae porro dolorem expedita unde. Odit deserunt tempora eligendi ratione perspiciatis quae, praesentium iste nostrum eius laudantium mollitia, maiores laboriosam ipsum? Fuga aspernatur ratione, doloribus quisquam, qui et harum voluptates voluptatibus reiciendis debitis quod! Dolore harum nulla quos at ducimus, porro nisi ipsa? Nisi illo provident, iste nesciunt hic maxime sint voluptatibus totam odio aspernatur eum laudantium unde culpa nam. Vero enim vel nam laboriosam nesciunt adipisci. Accusamus, doloribus nihil eum consequatur aut voluptatem ex obcaecati esse fugiat expedita autem hic qui! Ipsam cumque voluptate perferendis, eveniet libero soluta deleniti enim illum temporibus nisi consectetur ut rerum quam fugit adipisci totam laboriosam accusamus numquam. Nesciunt quisquam itaque voluptatibus nobis, debitis error iure natus inventore aliquam neque quod rem sapiente.</p>


