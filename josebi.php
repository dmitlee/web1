<link rel="stylesheet" type="text/css" href="style-test10_joseph.css">
<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "어서오세용~~!!^^";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "안녕하세요?! 미노입니다 *=^-^=*.";
  }
  }
  function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
      $title = htmlspecialchars($list[$i]);
      if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"josebi.php?id=$title\">$title</a></li>\n";
        }
      }
      $i = $i + 1;
    }
  }

 ?>
 <div class="img">
    
        <h1><a href="index.html"><i>Our's Home</i></a></h1>
        <div id="grid">
          <ul>
            <i><?php print_list();?></i>
        </ul>
        <div id="article">
          <h2><i><?php print_title();?></i></h2>
          <h3><i><?php print_description();  ?></i></h3>
        </div>
      </div>
    </div>

    </div>
  </div>
  <a href="create_joseph.php">글쓰기</a>
  <?php if(isset($_GET['id'])) { ?>
  <a href="update_mom.php?id=<?=$_GET['id'];?>">수정</a>
  <form action="delete_process_joseph.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="submit" value="delete">
  </form>



    <?php } ?>

    <?php
    require_once('view/bottom.php');
     ?>
