<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>섹션 6. 변수와 상수, 비교</title>
</head>
<body>
    <?php 
    //변수 : 변하는 수
    $a = 1;
    echo $a+1; #2
    echo "<br />";#줄바꿈
    $ a= 2;
    print $a+1; #3

    $first = "coding";
    echo $first."everybody";

    //상수 : 변하지 않는 수
    define("title","PHP Tutorial"); //title은 상수가 되고
    echo TITLE; //PHP Tutorial 출력됨
    define("title","JABA Tutorial"); //에러출력 -> 이미 정의 된 값을 또 정의하려했기때문에 오류 출력

    //고급주제
    //1.변수에 담긴 데이터 형을 검사하고 변경하기
    $a = 100;
    echo gettype($a);//integer 출력
    settype($a,"double"); //a를 실수로 set
    echo '</br>'; 
    echo gettype($a); //double 출력
    //2.가변변수
    $title = "subject";
    $$title = "PHP tutorial";//$title이subject값을 가지고 $subject가 된다. 이 값을 PHP tutorial로 설정하겠다는 의미
    echo $subject;

    //비교 : 두 값을 비교 -> 조건문, 반복문에서 사용됨
    //Boolean : true, false
    //비교 연산자 == -> 두 값이 같은지 비교 (대입연산자는 = -> 값을 대입)
    echo "1==2" :"";#false
    var dump (1==2);
    //!= -> 부정연산(값을 반대로)
    echo "1!=2" :"";#true
    var dump (1!=2);
    //>= -> 크거나 같다


    ?>
</body>
</html>