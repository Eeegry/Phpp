<?php
    /* Математические Функции
    
    $x = -15;
    echo abs ($x)."<br/>";
    $y = 49.5141323;
    echo round ($y, 3)."<br/>";
    echo ceil($y)."<br/>";
    echo floor($y)."<br/>";

    echo mt_rand(1, 20)."<br/>";
    echo min(12, 23, -2, -5, 10, -4, 0)."<br/>";
    echo max(12, 23, -2, -5, 10, -4, 0)."<br/>";

    $z = 1;

    echo round(sin($z),2); */

    // Строковые функции

    $string = "Expmple is";

    echo strlen($string)."<br/>";
    echo strpos($string, "x")."<br/>";

    if (strpos($string, "Е") === false) echo "X is not found";
    else echo "T is found!";
?>