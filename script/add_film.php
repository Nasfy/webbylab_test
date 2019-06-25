<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/main.css">
  <title>Webbylab</title>
</head>
<body>
  <header id="header" class="header">
    <?php require '../view/menu.php' ?>
  </header>
  <?php require '../database/db_connect.php' ?>
  <?php
  $result = $mysqli->query("INSERT INTO ".$db_table." (title, year, format, actors) VALUES ('$title','$year','$format','$stars')");
  mysqli_close($mysqli);
  ?>
    <script <script type="text/javascript">window.location="$_SERVER['DOCUMENT_ROOT'].'/index.php'"  </script>
</body>
</html>
