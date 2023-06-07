<?php
sleep(1);
if($_POST['name'] == "Admin"){
  echo 'n';
}else{
  echo $_POST['name'];
}