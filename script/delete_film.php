<?php require '../database/db_connect.php';
echo $POST['delid'];
if(!empty($_POST['delid'])) {
  $id=intval($_POST['delid']);
  $del = "DELETE FROM films_info WHERE id = $id";
}
$result = mysqli_query($mysqli, $del) or die("Ошибка " . mysqli_error($link));
mysqli_close($mysqli);
?>
<script> window.location=document.referrer; </script>
