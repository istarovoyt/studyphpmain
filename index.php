<?php
	//Функция strlen - возвращает длину строки
    $str = "Hello, my name is Igor Starovoyt!";
    $result = strlen($str);
    echo  $result;

    echo "<br>";

    //Функция strpos - возвращает позицию вхождения подстроки
    $str_1 = "This is a fucking string, motherfucker!";
    $res_1 = strpos($str_1, "fu");
    echo $res_1;

    echo "<br>";

    //Функция substr - возвращает подстроку в заданной строке
    $str_2 = "Something string";
    $res_2 = substr($str_2, 10, 3);
    echo $res_2;

    echo "<br>";

    //Функция explode - разбивает строку на массив подстрок
    $str_3 = "Эта строка будет разбита на массив подстрок";
    $res_3 = explode(" ", $str_3);
    print_r($res_3);

    echo "<br>";


?>