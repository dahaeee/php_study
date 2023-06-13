<?php

//define -> call
//function
function numbering(){
    $i = 0;
    while($i < 10){
        echo $i;
        $i += 1;
    }
}
numbering(); //재활용 가능
numbering();
numbering();

//입출력
function get_arguments1($arg1, $arg2){
    return $arg1 + $arg2;
}
echo get_arguments1(10, 20);
echo get_arguments1(20, 30);

//함수 인자의 기본값
$test = 1;
function get_arguments2(){
    global $test;
    $test = 2;
}
echo get_arguments2();
echo $test;












?>