<?php
require_once "Engineer.php";
$engineer = new Engineer();
$table = "d_pattern";
$list = $engineer->getContentsRandom($table);


$question = $_GET['question'];
$choice = $_GET['choice'];
$score = 0;

if($question == $choice) {
    $score = $score + 1;
    echo "<script>alert('축하합니다. 정답입니다!');</script>";
    echo "<script>document.location.href='d_pattern_view.php';</script>";
}  else {
    echo "<script>alert('오답입니다.');</script>";
    echo "<script>document.location.href='d_pattern_view.php';</script>";


}