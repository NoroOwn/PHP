<?php
    $a = "Александрос";/*Присваивает любой текст*/
    if ($a == "Александрос")
    {
        echo "Привет, $a!";/*Будет выводить если в присвоеном будет какое-нибудь имя*/
    } 
    elseif ($a == "")
    {
        echo "Привет, незнакомец!";/*Будет писать если ничего не написали про имя*/
    }
?>
