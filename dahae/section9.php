<?php 

$i = 0;

while($i < 10){
    echo 'coding everybody';
    $i += 1; //반복문 실행될 때마다 1씩 증가
}

for($i = 0; $i < 10; $i++){
    echo 'coding everybody'.$i.'<br>';
    echo 'coding everybody{$i}<br>'; //스트링 안에 사용 가능
    echo 'coding everybody'.($i*2).'<br>';
}

//흐름제어
for($i = 0; $i < 10; $i++){
   if($i === 5){
        break; //중지
   }
   echo 'coding everybody'.$i.'<br>';
}

for($i = 0; $i < 10; $i++){
    if($i === 5){
        continue; //제외
    }
    echo 'coding everybody'.$i.'<br>';
 }

//중첩
 for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        echo 'coding everybody{$i}{$j}<br>';
    }
 }


?>
