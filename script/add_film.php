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
  $titleErr = $yearErr = $actorsErr = "";
  $title = $year = $actors = "";
  $cnt = 1;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST["title"]);
    $year = test_input($_POST["year"]);
    $actors = test_input($_POST["actors"]);
    if (!preg_match("/[A-Za-zА-Яа-яёЁЇїІіЄєҐґ]/", $title)){
        $titleErr = "Write correct title";
        $cnt = 0;}
    if (!ctype_digit($year) || ((int)$year < 1888) || (ctype_space($year))) {
      $yearErr = "Write correct year";
      $cnt = 0;}
    if (!preg_match("/[A-Za-zА-Яа-яёЁЇїІіЄєҐґ]/", $actors)) {
        $actorsErr = "Write correct actors";
        $cnt = 0;}
    if ($cnt == 1)
        $cnt = 2;
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <h1>ADD film</h1>
  <?php if ($cnt == 0): ?>
    <h2 class="error">TRY AGAIN</h2>
  <?php endif ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input required class="add" name="title" type="text" placeholder="Title"/>
    <span class="error"><?php echo $titleErr;?></span><br>
    <input required class="add" name="year" type="text" placeholder="Release Year"/>
    <span class="error"><?php echo $yearErr;?></span><br>
    <select required class="add" name="format" placeholder="Format">
      <option value="" disabled selected hidden>Format</option>
      <option value="dvd">DVD</option>
      <option value="blu_ray">Blu-ray</option>
      <option value="vhs">VHS</option>
    </select>
    <br>
    <input required class="add" name="actors" type="text" placeholder="Actors"/>
    <span class="error"><?php echo $actorsErr;?></span><br>
    <input type="submit" value="ADD film"/>
  </form>
  <?php
  if ($cnt == 2):
    $result = $mysqli->query("INSERT INTO ".$db_table." (title, year, format, actors) VALUES ('$title','$year','$format','$stars')");
    mysqli_close($mysqli);?>
    <script type="text/javascript">window.location = "../index.php" </script>
  <?php endif ?>
</body>
</html>
