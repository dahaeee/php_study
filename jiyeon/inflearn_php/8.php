<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조건문</title>
</head>
<body>
    <?php
    //조건문 문법
    // 조건문 : 주어진 조건에 따라 다르게 동작하도록 하는것 (매우중요 !!!!!!)
    // if : 가정법 -> 만약에 ~
    if(true){//만약 조건(괄호안의 값)이 참이라면
        echo 'result : true';// {}문장 실행
    }

    if(true){//만약 조건(괄호안의 값)이 참이라면
        echo 1;// {}문장 실행
    }
    echo 5;//15출력

    if(false){//만약 조건(괄호안의 값)이 참이라면
        echo 1;// {}문장 실행
    }
    echo 5;//5출력

    // if...else~ : 참이면 if 뒤 중괄호, 거짓이면 else뒤 중괄호 실행
    // else if : 반드시 if뒤에 나오고 else 전에 나와야함
    ?>

    <?php
    //조건문의 응용
    ?>
   
     <form metod ="get" action="8_1.php">
        <input type ="text" name="id"/>
        <input type ="submit"/>
    </form>

    <form metod ="post" action="8_2.php">
        id: <input type ="text" name="id"/>
        pw: <input type ="text" name="password"/>
        <input type ="submit"/>
    </form>
 

    <?php
    //조건문 - 논리연산자
    //and : 좌항 우항 모두 참일때만 전체가 참 (&&로 표기)
    if(true and true){//
        echo 1;
    }
    
    //or : 좌항 우항 줄 중 하나라도 참이면 전체가 참 (or로 표기)
    //! : 부정의 의미. !true는 false

    ?>
    <form metod ="post" action="8_3.php">
        id: <input type ="text" name="id"/>
        pw: <input type ="text" name="password"/>
        <input type ="submit"/>
    </form>

    <?php
    //boolean과 형변환
    ?>
    
</body>
</html>