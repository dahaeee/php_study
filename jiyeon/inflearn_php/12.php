<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include 와 require</title>
</head>
<body>
    <?php //include 와 require
    //include -> 파일이 없으면 warning 에러
    //include_once -> include를 한번만 함(include가 두 번 적혀있으면 두 번 찍힘)
    //require -> include와 비슷함. 파일이 없으면 fatal에러
    //require_once -> require를 한번만 함(require가 두 번 적혀있으면 두 번 찍힘)
        function welcome(){
            return 'hello world';
        }

        echo welcome();
    ?>
    <?php //namespace
        require_once '11_2_en';
        require_once '11_2_ko';
        echo welcome();//en 호출
        echo welcome();//ko 호출
        //위에 쓴 함수는 에러발생 -> welcome 함수를 중복으로 선언했기 때문
        //이 때 사용하는게 namespace

        //language\ 를 기준으로 구분함
        require_once '11_2_en_ns.php';
        require_once '11_2_ko_ns.php';
        echo language\ko\welcome();
        echo language\en\welcome();
        //namespace는 한 파일에서 여러번 선언가능함
      
    ?>
</body>
</html>