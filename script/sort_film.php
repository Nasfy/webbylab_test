<link rel="stylesheet" href="./css/main.css">
<?php require_once './database/db_connect.php';
function getTitle($mysqli) {
  $sql = "SELECT * FROM films_info ORDER BY title COLLATE utf8_unicode_ci, title COLLATE utf8_bin";
  $result = mysqli_query($mysqli, $sql);
  $title = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return ($title);
}
$title = getTitle($mysqli);
if(count($title) === 0):?>
  <h1>NO FILMS</h1>
  <p>Tap <span class="bold">"IMPORT file"</span> or <span class="bold">"ADD film"</span> for download  </p>
<?php else:
  $i = 0?>
<?php foreach ($title as $name):?>
  <div class="list">
      <li><a href="#" class="menu"><?=$title[$i][title]?></a>
        <ul class="sub-menu">
          <div class="sub">
          <li>#:<?=$title[$i][id]?></li>
          <li><?=$title[$i][year]?></li>
          <li><?=$title[$i][format]?></li>
          <li><?=$title[$i][actors]?></li>
          </div>
        </ul>
      </li>
      <form class="" action="../script/delete_film.php" method="POST">
        <input type="hidden" name="delid" value="<?php echo $title[$i++]['id'];?>">
        <button type="submit">DEL</button>
      </form>
 </div>
<?php endforeach?>
<?php endif?>
