<?php
$a = 1;/*Будет присваивать 1*/
    do{/*В данном случае условие цикла проверяется только после выполнения его тела*/
        $pow = $a * $a;
        echo($pow . " ");/**/
        $a++;/*Постфиксный инкремент*/
        $i++;/*Постфиксный инкремент*/
    }while( $i < 9);/**/
?>