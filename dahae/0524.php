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
    <div>[조건문]</div>
    <?php
        if(true){
            echo 1; 
        }else if(false){
            echo 2;
        }else{
            echo 3;
        }
    ?>
    <br><br>

    <div>[조건문 응용]</div>
    <form method="post" action="0524.php">
        id : <input type="text" name="id">
        name : <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
        if($_POST['id'] && $_POST['name']){
            if($_POST['id'] === "dahaeee"){
                if($_POST['name'] === "0423"){
                    echo "right";
                }else{
                    echo "name wrong";
                }
            }else{
                echo "id wrong";
            }
        }
    ?>
    <br><br>

    <div>[논리연산자]</div>
    <?php
        if($_POST['id'] && $_POST['name']){
            if($_POST['id'] === "0423" && $_POST['name'] === "dahaeee"){ // and -> 모두 조건에 맞아야 함 
                echo "all right";
            }else{
                echo "all wrong";
            }
            
            if($_POST['id'] === "0423" || $_POST['id'] === "980423"){ // or -> 하나만 조건에 맞아도 됨
                if($_POST['name'] === "dahaeee"){
                    echo "name : dahaeee, id : ".$_POST['id'];
                }else{
                    echo "wrong";
                }
            }
        }
    ?>
    <br><br>

    <div>[boolean]</div>
    <?php
        //0이 아닌 숫자는 모두 true를 반환
        
        $a = "야호 ~!";
        gettype($a); //변수타입
        empty($a);	//비어있는지
        is_null($a); //null인지	
        isset($a); //선언되어있는지

        //== 와 === 의 차이?
        //== : 값이 같은지 비교
        //=== : 값과 형식이 같은지 비교
    ?>
    <br><br>

</body>
</html>