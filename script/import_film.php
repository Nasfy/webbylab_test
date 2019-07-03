<?php require '../database/db_connect.php';
@mkdir("file", 0777);
$uploadfile = "file/".basename($_FILES['data']['name']);
var_dump($uploadfile);
if (@!copy($_FILES['data']['tmp_name'], $uploadfile)):?>
  <script type="text/javascript">window.location = "../view/import.php" </script>
<?php endif ?>
<?php
$content = file($uploadfile);
foreach ($content as $item) {
  $cell = preg_split("/(Title:|Release Year:|Format:|Stars:)/", $item);
  if (isset($cell[1]))
  $array[] = $cell[1];
}
if (@!$allArray = array_chunk($array, 4)):?>
<script type="text/javascript">window.location = "../view/import.php" </script>
<?php endif ?>
<?php
foreach ($allArray as $key) {
  $result = $mysqli->query("INSERT INTO ".$db_table." (title, year, format, actors) VALUES ('$key[0]','$key[1]','$key[2]','$key[3]')");
}
mysqli_close($mysqli);
?>
<script type="text/javascript">window.location = "../index.php" </script>
