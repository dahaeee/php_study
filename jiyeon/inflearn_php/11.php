<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>
    <?php //PHP 배열 문법
        $member = ['jiyeon','dahae','cute'];
        echo $member[0].'br/>';
        echo $member[1].'br/>';
        echo $member[2].'br/>';

        function get_members(){
            return['jiyeon','dahae','cute'];
        }
        var_dump(get_members());

        function get_members2(){
            return['jiyeon','dahae','cute'];
        }

        $tmp = get_members2();//get_members2함수의 리턴값이 tmp에 저장됨
        echo $tmp[1];//dahae가 출력됨
        echo get_members2()[1];//이렇게 출력해도 위와 동일하게 출력됨
    ?>
    <?php //배열과 반복문
        function get_members3(){
            return['jiyeon','dahae','cute'];
        }

        $members = get_members3();//get_members3의 리턴값이 담겨있음
        for($i = 0; $i < count($members); $i++){
            echo ucfirst($members[$i]).'<br/>';//i값은 0 -> 1 -> 2
            //ucfirst는 배열의 첫 글자가 대문자로 출력됨
        }
    ?>
     <?php //배열의 조작
        //끝에 있는 값을 넣을때는 push
        //끝에 있는 값을 제거할때는 pop
        //첫번째있는 값을 제거 shift
        //첫번째있는 값을 추가 unshift
        $li = ['a','b','c','d','e'];
        //f를 배열끝에 추가
        array_push($li,'f');
        var_dump($li);
        //f를 배열맨앞에 추가
        array_unshift($li,'f');
        var_dump($li);
        //배열의 첫번째 값이 제거
        array_shift($li);
        var_dump($li);
        //배열의 첫번째 값이 제거?????????
        array_pop($li);
        var_dump($li);
        //정렬 sort (1,2,3,4,... 또는 a,b,c,d,...)
        //정렬 rsort (4,3,2,1,... 또는 d,b,c,a,...)
        sort($li);
        var_dump($li);
    ?>
    <?php //연관 배열
        $grades = array('jiyeon' =>10, 'dahae' => 6, 'hi' => 80);//=>기준으로 왼쪽에 있는 값을 key 오른쪽게 있는값을 value
        var_dump($grades);
        //위에있는 $grades와 아래에 있는$grades는 동일함
        $grades = [];//array()와 똑같음
        $grades['jiyeon'] = 10;
        $grades['dahae'] = 6;
        $grades['hi'] = 80;
        var_dump($grades);
        //배열에 있는 값을 하나하나 꺼내기 -> '열거'한다
        //열거의 방법 foreach
        $grades = array('jiyeon' =>10, 'dahae' => 6, 'hi' => 80);
            foreach($grades as $key => $value){//grades는 배열 요소의 수 만큼 반복됨
                //as $key => $value 는 반복이 실행 될 때 요소를 가져옴
                echo "key: {$key} value: {$value}<br/>";// 반복 될 때마다
            }
    ?>
</body>
</html>