<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>섹션 7. 입출력 그리고 form과 http</title>
</head>
<body>
<?php
    //입력과출력
    echo $_GET['id'];//$_GET['id']사용자가 입력하는값을 echo로 화면에 출력
    
    //HTML FORM
    <form method="get" action="7.php">
        id : <input type ="text" name = "id"/>
        password : <input type = "text" name = "password" />
        <input type = "submit"/>
    </form>
    
    //GET 방식 vs POST 방식
            get은 서버로 정보를 전송할때 url뒤에 포함
            post는 url에 정보를 포함하지 않고 서버에 전송
            
            서버와 클라이언트가 소통할때 사용하는 프로토콜 = http -> http는 데이터를 전송 (php는 데이터를 수신)
            
             echo $_POST['id'].$_POST['password'] -> url뒤에 아무것도 안붙음 (GET보다 보안성이 좋음)
            
            id/pw는 post 방식을 사용해야함
            게시판같은 페이지는 GET방식을 사용 -> url뒤에 정보가 필요할때는  get방식사용
            
?>
<!-- //HTML FORM 예제-->
    <form method="get" action="7.php"> <!-- method는 데이터 전송 방식을 말함 -->
        id : <input type ="text" name = "id"/>
        password : <input type = "text" name = "password" />
        <input type = "submit"/>
    </form>
</body>
</html>
