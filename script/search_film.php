<?php
require '../database/db_connect.php';
if (!empty($_POST['title'])) {
$s = $_POST['title'];
$q = "SELECT * FROM films_info WHERE title LIKE '$s'";
}
else if (!empty($_POST['name'])) {
$s = $_POST['name'];
$q = "SELECT * FROM films_info WHERE actors LIKE '%$s%'";
}
  $result = mysqli_query($mysqli, $q) or die("Ошибка " . mysqli_error($link));
  $title = mysqli_fetch_all($result, MYSQLI_ASSOC);
  print_r($title);
  $i = 0;
  foreach ($title as $name):
?>
<div class="list">
    <li><a href="#" class="menu"><?=$title[$i][title]?></a>
      <ul class="sub-menu">
        <div class="sub">
        <li><?=$title[$i][year]?></li>
        <li><?=$title[$i][format]?></li>
        <li><?=$title[$i][actors]?></li>
        </div>
      </ul>
    </li>
    <form class="" action="./script/delete_film.php" method="POST">
      <input type="hidden" name="delid" value="<?php echo $title[$i++]['id'];?>">
      <button type="submit">DEL</button>
    </form>
</div>
<?php endforeach?>
