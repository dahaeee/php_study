<?php
if($_POST['id'] === 'jiyeon' && $_POST['password'] === '1111'){
    echo 'right';
} else {
    echo 'wrong';
}

//조건문 중첩
if($_POST['id'] === 'jiyeon'){
    if($_POST['password'] === '1111'){
        echo 'right';//id, pw 둘다 맞을때
    }else{
        echo 'pw wrong';// pw만 틀렸을때
    }
} else {
    echo 'wrong';//id 틀렸을때
}
?>