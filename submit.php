<?php
@session_start();

$username=$_SESSION['username'];
if (isset($_POST['title']) and isset($_POST['comment']) )
$title=$_POST['title'];
$content=$_POST['comment'];

?>