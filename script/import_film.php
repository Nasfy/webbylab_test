<?php require '../database/db_connect.php';
$uploaddir = '/file';
$uploadfile = $uploaddir.basename($_FILES['data']['name']);
copy($_FILES['data']['tmp_name'], $uploadfile);
$content = file($uploadfile);
foreach ($content as $item) {
  $cell = preg_split("/(Title:|Release Year:|Format:|Stars:)/", $item);
  if (isset($cell[1]))
  $array[] = $cell[1];
}
$allArray = array_chunk($array, 4);
foreach ($allArray as $key) {
  $result = $mysqli->query("INSERT INTO ".$db_table." (title, year, format, actors) VALUES ('$key[0]','$key[1]','$key[2]','$key[3]')");
}
mysqli_close($mysqli);
require '../view/import.php';
?>
