<?php
ini_set('display_errors', '0');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>생활 코딩 - PHP</title>
</head>
<body>
    <div>[문자와 숫자]</div>
    <?php 
        echo 4 + 2; //사칙연산 가능
        var_dump(6); //데이터형을 포함한 echo 
        echo "안녕 세상아"; //string
        echo 99999; //int
        echo "에스파는 나야"." 둘이 될 순 없어"; //php에서는 .으로 연결
        echo "너... '바보'구나?"; //같은 따옴표 사용 불가
        echo "신입 짱구 \"대단하다!\""; //역슬래시 사용하면 인식하므로 같은 따옴표 사용 가능
    ?>
    <br><br>

    <div>[변수]</div>
    <?php 
        $a = 1; //변수 선언
        echo $a + 1;
        $b = 3;
        echo $a + $b;

        $first = "dev";
        echo $first."eloper"."<br>";

        $num = 12345;
        $num = $num + 10;
        print $num."<br>";
        $num = $num / 10;
        print $num."<br>";
        $num = $num - 10;
        print $num."<br>";
        $num = $num * 10;
        print $num;
    ?>
    <br><br>

    <div>[상수]</div>
    <?php 
        define('title', 'php study'); //상수는 한 번 선언 가능
        echo title;
    ?>
    <br><br>

    <div>[비교]</div>
    <?php 
        echo "1==2 : "; 
        var_dump(1==2); //boolean -> true / false
        echo "<br>";
        echo "1==1 : ";
        var_dump(1==1);
        echo "<br>";

        echo "1!=2 : ";
        var_dump(1!=2);
        echo "<br>";
        echo "1!=1 : ";
        var_dump(1!=1);
        echo "<br>";
    ?>
    <br><br>

    <div>[입출력]</div>
    <?php 
        //url에 입력, $_GET으로 출력
        echo $_GET['idx'];
        echo $_GET['name']; //?idx=123&name=dahae
    ?>
    <br><br>

    <div>[form]</div>
    <form method="post" action="0523_action.php">
        id : <input type="text" name="id">
        password : <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>