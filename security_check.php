<?php
require_once "Engineer.php";
$engineer = new Engineer();
$table = "security";
$list = $engineer->getContentsRandom($table);

//$no = $_GET['no'];
$question = $_GET['question'];
$choice = $_GET['choice'];
$score = 0;

if($question == $choice) {
    $score = $score + 1;
    echo "<script>alert('축하합니다. 정답입니다!');</script>";
    echo "<script>document.location.href='security_view.php';</script>";
}  else {
    echo "<script>alert('오답입니다.');</script>";
    echo "<script>document.location.href='security_view.php';</script>";


}
