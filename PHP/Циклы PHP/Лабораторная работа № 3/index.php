<?php
    $menu = array(/*Создаёт масив меню*/
        "Home"  => "index.php",
        "About" => "about.php",
        "Contact" => "contact.html",
    );
    foreach ($menu as $key => $value){/*Первый цикл перебирает массив. На каждой итерации значение текущего элемента присваивается переменной $value.*/
        echo "<a href=" . $value. ">". $key. "</a><br>";/*Будет выводить меню*/
    }
?>
