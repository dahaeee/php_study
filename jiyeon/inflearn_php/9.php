<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문</title>
</head>
<body>
    <?php //PHP 반복문 기본 문법 
    //while: 조건이 true 인 동안 반복
    $i = 0;
    while($i < 10){
        echo 'hi';
        $i += 1; //$i = $i + 1; 반복문이 실행될떄마다 1의값을 1씩 증가
    }
    //for
    // for(초기화; 반복 지수 여부; 반복실행){
    //     코드;
    // }
    for($i = 0; $i < 10; $i++){
        echo 'hi'.$i."<br/>";
    }
    ?>
    <?php //반복문의 효용  
    //{$i} 이렇게 사용하면 .$i.랑 똑같음
    ?>
    <?php //반복문의 흐름 제어
    //break: 반복문 종료
    for ($i = 0; $i < 10; $i++){
        if($i === 5){ //true가되면서 반복문 완전종료
            break;
        }
        echo "hi{$i}<br/>";
    }
    //continue: 반복문 흐름종료
    for ($i = 0; $i < 10; $i++){
        if($i === 5){ //반복문을 "흐름"을 중단시키고 증감값실행
            continue;
        }
        echo "hi{$i}<br/>";//5는 출력안됨
    }
    ?>
    <?php // 반복문의 중첩(구구단 생각)
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 10; $j++){
            echo "hi{$i}[$j]<br/>";
        }
    }
    ?>
</body>
</html>