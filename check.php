<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    print_r($email);
    echo "<br />";
    print_r($name);
    echo "<br />";
    print_r($message);
    echo "<br />";
}
?>