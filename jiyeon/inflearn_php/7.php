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
?>
<!-- //HTML FORM 예제-->
    <form method="get" action="7.php">
        id : <input type ="text" name = "id"/>
        password : <input type = "text" name = "password" />
        <input type = "submit"/>
    </form>
</body>
</html>