<?php
    $connect = mysqli_connect('localhost','root','111111','p4c');

    session_start();

    if(!$connect) {
        die(mysqli_error($connect));
    }
?>