<?php
$title = $_POST['title'];
$year = $_POST['year'];
$format = $_POST['format'];
$stars = $_POST['actors'];

$db_host = "localhost";
$db_user = "Anastasiia";
$db_password = "admin";
$db_base = 'films';
$db_table = "films_info";

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
if ($mysqli->connect_error) {
    die('ERROR : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
