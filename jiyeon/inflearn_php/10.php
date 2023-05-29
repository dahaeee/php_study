<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>
<body>
    <?php //PHP 함수의 기본문법
        //함수의 목적 -> 코드의 재활용, 유지보수 용이
        //함수는 정의, 호출 로 이루어져있음(정의는 한번만, 호출은 무한대)
        // function 함수이름(){
        //     코드
        // }
        function numbering(){
            $i = 0;
            while ($i < 10){echo $i;
            $i += 1;
            }
        }
        numbering();//함수 호출
    ?>
    <?php //함수의 입출력
    //출력
    function get_member(){
        return 'ji';
        return 'jii';
        return 'jiii';
    }
    echo get_member;
    //ji만 출력함 왜냐하면 return 'ji'를 실행하고 함수가 종료됨
    //함수에서 return이 등장한 이후에는 함수내 어떠한 코드도 실행되지 않음

    //입력
    function get_argument($arg){
        return $arg;
    }
    print get_argument(1);//함수에 1을 입력 따라서 1을 출력함
    //복수입력
    function get_argument2($arg1, $arg2){
        return $arg1 + $arg2;
    }
    echo get_argument2(10,20);
    ?>
    <?php //함수 인자의 기본값
    function get_argument3($arg1 = 100){//입력값이 없을때 arg1는 100이됨
        return $arg1;
    }
    echo get_argument3(1);
    echo ',';
    echo get_argument3();
    //1, 100 이 출력됨

    //지역변수 vs 전역변수 =>scope
    //지역변수: 함수내에서 유효한 변수
    //전역변수: 함수외부에서도 유효한 변수
    ?>
</body>
</html>