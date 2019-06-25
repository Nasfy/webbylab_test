<?php
function getTitle($mysqli) {
  $sql = "SELECT * FROM films_info";
  $result = mysqli_query($mysqli, $sql);
  $title = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return ($title);
}
?>
