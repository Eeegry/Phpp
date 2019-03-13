<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    echo("Email: ");
    print_r($email);
    echo "<br />";
    echo("Name: ");
    print_r($name);
    echo "<br />";
    echo("Message: ");
    print_r($message);
    echo "<br />";
    print_r($_POST);
    $to = "jurijs_kolesnikovs@inbox.lv";
    $from = $_POST['email'];
}
?>