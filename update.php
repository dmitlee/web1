<?php
require_once('lib/print.php');

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php
    print_title();
     ?></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</h1>
    <ol>
      <?php
      print_list();


      /*
      echo "<li>$list[0]></li>\n";
      echo "<li>$list[1]></li>\n";
      echo "<li>$list[2]></li>\n";
      echo "<li>$list[3]></li>\n";
      echo "<li>$list[4]></li>\n";
      echo "<li>$list[5]></li>\n";
      */
      ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
  <?php } ?>
      <h2>
        <?php
        print_title();
         ?>

      </h2>
      <?php
      print_description();
      ?>

          <form action="update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
          <input type="text" name="title" placeholder="Title"value="<?php print_title(); ?>">
        </p>
        <p>
          <textarea name="description" placeholder="Description"><?php print_description();?></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
      </form>
      <?php
      require_once('view/bottom.php');
       ?>
