<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
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
}
?>