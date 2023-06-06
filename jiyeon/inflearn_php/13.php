<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일</title>
</head>
<body>
    <?php //php 파일제어
        $file = '13_1.txt';//카피할 파일
        $newfile = 'example.txt.bak';//카피될 파일
         
        if (!copy($file, $newfile)) {
         echo "failed to copy $file...\n";
        }
        
        //파일 삭제
        unlink('deleteme.txt');//deleteme.txt파일 삭제
    ?>
    <?php //파일 읽고 쓰기
        //file_get_contents : 파일의 내용을 읽음
        $file = './13_1.txt';
        echo file_get_contents($file);

        //file_put_contents : 파일을 기록
        $file = './13_1.txt';
        file_put_contents($file,'hihi');

        //fopen : 파일을 열고 읽기/쓰기 가능한 함수
    ?>
    <?php //파일을 다루는 과정에서 발생 가능한 문제들
        //ls -a -> 리눅스에서 권한 확인 명령어
        //rwx -> 권한
        //is_readable : 파일을 읽을 수 있는지 확인
        //is_writeable : 파일을 쓸 수 있는지 확인
        //file_exist() : 파일 존재확인
    ?>
    <?php //디렉토리 제어하기
        echo getcwd().'<br/>';//현재 경로 출력
        chdir('../');// ../은 부모디렉토리로 이동
        echo getcwd().'<br/>';

        //scandir() -> 파일의 경로를 검색함
        //mkdir() -> 파일을 생성함
        ?>

    <?php //업로드를 위한 폼?>
    <form action= "13_2.php" enctyype="multpart/form-data" method = "POST">
            <input type ="hidden" name="MAX_FILE_SIZE" value="1000"></input>
            <input type ="file" name="userfile"></input>
            <input type ="submit" value="upload"></input>
    </form>
    <?php //파일 업로드 - 수신에플리케이션?>
    <?php //파일 업로드 - 기타설명?>
</body>
</html>