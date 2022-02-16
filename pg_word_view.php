<?php
require_once ("Engineer.php");
$engineer = new Engineer();
$table = "pg_word";
$list = $engineer->getContentsRandom($table);
$url = "pg_word_view.php";
$number = 0;

?>


<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Security Quiz</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin 0 auto;
            text-align: center;
        }
        .box {
            margin: 0 auto;
            padding: 10px;
            width: 70%;
            background-color: lightgreen;
        }
        a {
            text-decoration: none;
            color: black;
        }
        a:hover {
            color: red;
            font-size: 1.2rem;
        }
        footer {
            background-color: lightgray;
            margin-top : 200px;
            text-align: right;
        }
        button {
            padding: 10px;
            font-size: 1.1rem;
        }
        .input {
            width: 100px;
            height: 40px;
            font-size: 1.2rem;
        }

    </style>
</head>
<body>
<h2>프로그래밍 언어 활용 용어 Quiz</h2>
<h4>프로그래밍 언어 활용 용어에 대한 설명을 보고 알맞은 답을 골라주세요!</h4>
<a href="engineer_Main.php"><button>메인으로</button></a>
<a href="pg_word_list.php"><button>전체보기</button></a>
<hr>


<div class="box">
    <?php
    $random = rand(0,3);
    print_r($list[$random][2]);
    echo "<br>";
    //        echo "정답은 : ";
    //        print_r($list[$random][1]);
    ?>
</div>

<br><br>
<?php foreach ($list as $value) {
    $number += 1;
    ?>
    <div class="choice"><a href="check.php?no=<?php echo $value['no']; ?>&question=<?php echo $random+1; ?>&choice=<?php echo $number; ?>"><?php echo $number.". ".$value['word']; ?></a></div><br>

<?php } ?>

<!--    키보드로 숫자 입력하기-->
<br><br>
<form action="check.php" method="get">
    <label for="" hidden><input type="text" name="question" value="<?php echo $random+1; ?>"></label>
    <label for="input"><input type="text" name="choice" class="input" autofocus></label>
    <input type="text" name="table" value="<?php echo $table ?>" hidden>
    <input type="text" name="url" value="<?php echo $url ?>" hidden>
    <input type="submit" value="입력">
</form>
<br><br>
<footer>Copyright &copy; 2022.02 Lim Ji Eun All right reserved.</footer>
</body>
</html>

