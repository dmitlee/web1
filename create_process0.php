<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('location: /index.php?id='.$_POST['title']);
?>
  
