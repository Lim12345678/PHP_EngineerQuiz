<?php
require_once "Engineer.php";
$engineer = new Engineer();

$question = $_GET['question'];
$choice = $_GET['choice'];
$table = $_GET['table'];
$url = $_GET['url'];

$list = $engineer->getContentsRandom($table);

if($question == $choice) {
    echo "<script>alert('축하합니다. 정답입니다!');</script>";
    echo "<script>document.location.href='$url';</script>";
}  else {
    echo "<script>alert('오답입니다.');</script>";
    echo "<script>document.location.href='$url';</script>";
}
