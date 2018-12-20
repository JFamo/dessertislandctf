<?php
require_once('config.php');
global $link;
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$link){
	die('Could not connect: ' . mysqli_error());
}
$db_selected = mysqli_select_db($link,DB_NAME);
if (!$db_selected){
	die('Connot use: ' . mysqli_error($link));
}
?>