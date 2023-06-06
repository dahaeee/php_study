<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 받기</title>
</head>
<body>
    <?php
    ini_set("display_errors","1");
    $uploaddir = 'C:\xampp\htdocs\php_study\jiyeon\inflearn_php\file\\';//슬래시 두개 꼭 써야됨!
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
    echo '</pre>';
    if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){//tmp_name는 파일이 업로드된 임시디렉토리경로(업로드 -> 임시폴더 -> 지정폴더)
        echo "파일이 유효하고, 성공적으로 업로드.\n";
    } else {
        print "파일 업로드 공격의 가능성이 있습니다!.\n";
    }
    echo '자세한 디버깅 정보입니다 :';
    print_r($_FILES);
    print "</pre>";
    ?>
    <img src="file/<?=$_FILES['userfile']['name']?>" />
</body>
</html>