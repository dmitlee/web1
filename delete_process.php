<?php
unlink('data/'.basname($_POST['id']));
header('Location: /index.php');

?>
